<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FaqModel;

class Faq extends Controller
{
    public function index(){
        $educators = FaqModel::where('category','educators')->where('status','1')->get();
        $providers = FaqModel::where('category','providers')->where('status','1')->get();
        return view('pages.frontend.faq',['educators'=>$educators, 'providers'=>$providers,] );
    }
}
