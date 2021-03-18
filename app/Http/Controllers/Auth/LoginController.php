<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\LoginSecretKey;
use App\Models\Admin;
use Auth;
use Session;
use Mail;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    public $successCode = 200;
    public $authonticationFail = 401;
    public $internalError = 500;
    public $validationError = 400;
    public $validationErrorMessage = "Validation Error";
    public $successMessage = "Successfully Send key";
    public $failMessage = "Invalid Credential";
    public $credentials;
    
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:user')->except('logout');
    }
        
    public function showAdminLoginForm(){
        return view('auth.login', ['url' => 'admin']);
    }

    public function LoginSecretKey(Request $request){
//    public function adminLogin(Request $request){
        
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6',
            'mathcaptcha' => 'required|mathcaptcha',
        ]);
        //-----check secret key form field------//
        if ($request->has('secret_key')) {
            
            $data = Admin::where('email', $request->email)->first();
            //-----check secret key from database------//
            if($data->secret_key == $request->secret_key){
                if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
                    return response()->json(['code' => $this->successCode, 'message' => $this->successMessage, 'data' => ['status'=>TRUE,'secret'=>true]], $this->successCode);
                }
            }else{
                return response()->json(['code' => $this->successCode, 'message' => $this->failMessage, 'data' => ['status'=>FALSE,'secret'=>false]], $this->successCode);
            }
        }else{
            //-----create secret key for login------//
            $checkdata = Admin::where('email', '=', $request->email)->first();            
            $checkPassword = Hash::check($request->password, $checkdata->password);
            if ($checkPassword) {
                $secret_key = substr(str_shuffle("0123456789"), 0, 4);
                mail::to($request->email)->send(new LoginSecretKey($secret_key));  
                Admin::where('email', $request->email)->update(['secret_key' => $secret_key]); 
                
                return response()->json(['code' => $this->successCode, 'message' => $this->successMessage, 'data' => ['status'=>TRUE,'email'=>true]], $this->successCode);
            } else {
                return response()->json(['code' => $this->successCode, 'message' => $this->failMessage, 'data' => ['status'=>false,'authentication'=>false]], $this->successCode);
            }           
        }
    }

    public function adminLogin(Request $request){
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

//            return redirect()->intended('/admin');
            return response()->json(['code' => $this->successCode, 'message' => $this->successMessage, 'data' => ['status'=>TRUE,'secret'=>true]], $this->successCode);
        }
//        return back()->withInput($request->only('email', 'remember'));
        return response()->json(['code' => $this->successCode, 'message' => $this->failMessage, 'data' => ['status'=>false,'authentication'=>false]], $this->successCode);
    }
    
    public function showUserLoginForm(){
        return view('auth.login_user', ['url' => 'user']);
    }

    public function userLogin(Request $request){
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/user');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
    
    
     public function logout(Request $request) {
           
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/login/admin');

    }
}
