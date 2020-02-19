<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function indexMobile(Request $request){
        echo $request->userAgent(); die();
        return view('index-mobile');
    }

    public function detail(){
        return view('detail');
    }
}
