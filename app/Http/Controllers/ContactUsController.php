<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactAutoReplyToUser;
use App\Mail\ContactUserToAdmin;
use App\Models\ContactUs;


class ContactUsController extends Controller
{   
    public $successCode = 200;
    public $authonticationFail = 401;
    public $internalError = 500;
    public $validationError = 400;
    public $validationErrorMessage = "Validation Error";
    public $successMessage = "Thank you for your message. It has been sent.";
    public $failMessage = "There was an error trying to send your message. Please try again later.";
    public $credentials;
    public function sendMailTest(Request $request){
        $data = ['subject' => $request->subject];
        Mail::to('nadeem.shaikh@wdipl.com')->send(new ContactAutoReplayToUser($data));
    }
    
    public function submitForm(Request $request ){
         try {
            $input = $request->all();
            
            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'region' => 'required',
                'contact_number' => 'required|integer',
                'email' => 'required|string|email|emailformate',
                'purpose' => 'required',
                'comments' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(['code' => $this->validationError, 'message' => $this->validationErrorMessage, 'data' => ['status' => FALSE], 'error' => $validator->errors()], $this->validationError);
            }

//            ContactUs::create($input);
            $dataforUser = ['subject' => config('constants.AUTO_REPLY_USER'),'name'=>$request->name];
            $dataforAdmin = ['subject' => config('constants.USER_TO_ADMIN_MAIL_SUBJECT'), 
                'name'=> $request->name,
                'region' => $request->region,
                'contact_number' => $request->contact_number,
                'email' =>$request->email,
                'purpose' => $request->purpose,
                'comments' =>$request->comments,
                ];
            mail::to($request->email)->send(new ContactAutoReplyToUser($dataforUser));
            mail::to(config('constants.ADMIN_EMAIL'))->send(new ContactUserToAdmin($dataforAdmin));
            return response()->json(['code' => $this->successCode, 'message' => $this->successMessage, 'data' => ['status'=>TRUE]], $this->successCode);
        } catch (\Exception $e) {
            return response()->json(['code' => $this->internalError, 'message' => $e->getMessage(), 'data' => ['status' => FALSE]], $this->internalError);
        }
    }
}
