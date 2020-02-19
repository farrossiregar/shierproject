<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function indexMobile(){
        $get_api = file_get_contents('http://cms-shierproject.local/api-index-article');
        //dd(json_decode($get_api));
        $params['data'] = json_decode($get_api);
        return view('index-mobile')->with($params);
    }

    public function detail(){
        return view('detail');
    }
}
