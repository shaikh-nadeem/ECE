<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactAutoReplyToUser;
use App\Mail\ContactUserToAdmin;
use App\Mail\ContactAdminToUser;
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

            $dataforUser = ['subject' => config('constants.AUTO_REPLY_USER'),'name'=>$request->name];
            $dataforAdmin = ['subject' => config('constants.USER_TO_ADMIN_MAIL_SUBJECT'), 
                'name'=> $request->name,
                'region' => $request->region,
                'contact_number' => $request->contact_number,
                'email' =>$request->email,
                'purpose' => $request->purpose,
                'comments' =>$request->comments,
                ];
            
            $data = ContactUs::Create([ 
                'name'=> $request->name,
                'region' => $request->region,
                'contact_number' => $request->contact_number,
                'email' =>$request->email,
                'purpose' => $request->purpose,
                'comments' =>$request->comments,
                'is_active' =>1,
            ]);
             
            mail::to($request->email)->send(new ContactAutoReplyToUser($dataforUser));
            mail::to(config('constants.ADMIN_EMAIL'))->send(new ContactUserToAdmin($dataforAdmin));
//            mail::to('nadeem.shaikh@wdipl.com')->send(new ContactUserToAdmin($dataforAdmin));
            
            return response()->json(['code' => $this->successCode, 'message' => $this->successMessage, 'data' => ['status'=>TRUE]], $this->successCode);
        } catch (\Exception $e) {
            return response()->json(['code' => $this->internalError, 'message' => $e->getMessage(), 'data' => ['status' => FALSE]], $this->internalError);
        }
    }
    
    public function AdminContact(){
        $activeContacts = ContactUs::where('is_active','1')->get();
        $replyedContacts = ContactUs::where('is_active','!=','1')->get();
        
        return view('pages.admin.contact',['activeContacts'=>$activeContacts, 'replyedContacts'=>$replyedContacts,] );
    }
    
    public function ReplyContact(Request $request ){
        try {
            $input = $request->all();
            
            $validator = Validator::make($request->all(), [
                'reply' => 'required|string',
            ]);
            if ($validator->fails()) {
                return response()->json(['code' => $this->validationError, 'message' => $this->validationErrorMessage, 'data' => ['status' => FALSE], 'error' => $validator->errors()], $this->validationError);
            }
            
            $dataforUser = ['subject' => 'Reply your Contact from admin','reply'=>$request->reply, 'name' => $request->name];
            ContactUs::where('id', $request->id)->update(['reply' => $request->reply, 'is_active' => 0]);            
            mail::to($request->email)->send(new ContactAdminToUser($dataforUser));
            
            $mes = 'Updated Successfully';            
            session()->flash('status', $mes);            
            return response()->json(['code' => $this->successCode, 'message' => $this->successMessage, 'data' => ['status'=>TRUE]], $this->successCode);
        } catch (\Exception $e) {           
            
            $mes = 'Error';
            session()->flash('status', $mes);            
            return response()->json(['code' => $this->internalError, 'message' => $e->getMessage(), 'data' => ['status' => FALSE]], $this->internalError);
        }
    }
    
    public function deleteContact(Request $request){
        
        ContactUs::where('id', $request->id)->update(['is_active' => 2]); 

        $mes = 'Successfully Deleted';
        session()->flash('status', $mes);
        return json_encode(array("status"=>"success","message"=>"Successfully Deleted"));
    }
}
