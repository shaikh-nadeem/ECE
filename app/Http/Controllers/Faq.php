<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\FaqModel;

class Faq extends Controller
{   
    public $successCode = 200;
    public $authonticationFail = 401;
    public $internalError = 500;
    public $validationError = 400;
    public $validationErrorMessage = "Validation Error";
    public $successMessage = "Successfully Saved";
    public $failMessage = "There was an error";
    public $credentials;
    
    public function index(){
        $educators = FaqModel::where('category','educators')->where('status','1')->get();
        $providers = FaqModel::where('category','providers')->where('status','1')->get();
        return view('pages.frontend.faq',['educators'=>$educators, 'providers'=>$providers,] );
    }
    
    public function AdminFaq(){
        $educators = FaqModel::where('category','educators')->where('status','1')->get();
        $providers = FaqModel::where('category','providers')->where('status','1')->get();
        return view('pages.admin.faq',['educators'=>$educators, 'providers'=>$providers,] );
    }
    
    public function addFaq(Request $request ){
        try {
            $input = $request->all();
  
            $validator = Validator::make($request->all(), [
                'category' => 'required',
                'title' => 'required',
                'content' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(['code' => $this->validationError, 'message' => $this->validationErrorMessage, 'data' => ['status' => FALSE], 'error' => $validator->errors()], $this->validationError);
            }
            
             $data = FaqModel::Create([ 
                'category'=> $request->category,
                'title' => $request->title,
                'content' => $request->content,
            ]);
             
            $mes = 'Added Successfully';
            session()->flash('status', $mes);
            
            return response()->json(['code' => $this->successCode, 'message' => $this->successMessage, 'data' => ['status'=>TRUE]], $this->successCode);
        } catch (\Exception $e) {
            $mes = 'Error';            
            session()->flash('status', $mes);
            return response()->json(['code' => $this->internalError, 'message' => $e->getMessage(), 'data' => ['status' => FALSE]], $this->internalError);
        }        
    }
    
    public function EditFaq(Request $request){
        $data = FaqModel::where('id', $request->faqEditid)->first();
        try {
            $input = $request->all();
            
            $validator = Validator::make($request->all(), [
                'title' => config('form_validation_rule.title'),
                'content' => config('form_validation_rule.description'),
            ]);
            if ($validator->fails()) {
                return response()->json(['code' => $this->validationError, 'message' => $this->validationErrorMessage, 'data' => ['status' => FALSE], 'error' => $validator->errors()], $this->validationError);
            }
            
            $saveData = FaqModel::find($request->faqEditid);
            $saveData->title = $request->title;
            $saveData->content = $request->content;
            $saveData->save();
            
            $mes = 'Successfully Edited';
            session()->flash('status', $mes);
            
            return response()->json(['code' => $this->successCode, 'message' => $this->successMessage, 'data' => ['status'=>TRUE]], $this->successCode);
        } catch (\Exception $e) {
                        
            $mes = 'Error';
            session()->flash('status', $mes);
            
            return response()->json(['code' => $this->internalError, 'message' => $e->getMessage(), 'data' => ['status' => FALSE]], $this->internalError);
        }
    }
    
    public function DeleteFaq(Request $request){
        FaqModel::where('id', $request->id)->update(['status' => 0]); 
                
        $mes = 'Successfully Deleted';
        session()->flash('status', $mes);
        
        return json_encode(array("status"=>"success","message"=>"Successfully Deleted"));
    }
    
}
