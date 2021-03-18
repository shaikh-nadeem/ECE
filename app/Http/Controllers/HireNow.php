<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\BillingDetail;
use App\Models\CenterManagerDetail;
use App\Models\CompanyOwnerDetail;

class HireNow extends Controller
{
    public $successCode = 200;
    public $authonticationFail = 401;
    public $internalError = 500;
    public $validationError = 400;
    public $validationErrorMessage = "Validation Error";
    public $successMessage = "Successfully Saved";
    public $failMessage = "There was an error";
    public $credentials;
    
    public function __construct() {
//        $this->middleware('auth:admin')->except('logout');
    }
    
    public function index(){
        return view('pages.frontend.hire_now');
    }
}
