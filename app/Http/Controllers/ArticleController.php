<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class ArticleController extends Controller
{
    public function index(){
        $agent = new Agent();
        $device = $agent->device();
        
        //$get_api = file_get_contents('http://cms-shierproject.local/api-index-article');
        $get_api = file_get_contents('http://clothezon.com/api.shierproject.com/public/api-index-article');
        //dd(json_decode($get_api));
        $params['data'] = json_decode($get_api);
        //if($device == 'iPhone'){$agent->isDesktop();
        if($agent->isPhone()){
            return view('index-mobile-new')->with($params);
        }else{
            return view('index-new')->with($params);
        }
        
    }

    public function detail($alias){

        $article = file_get_contents('http://clothezon.com/api.shierproject.com/public/api-detail-article/'.$alias.'');
        $arr = json_encode(json_decode($article), TRUE);

        $params['id'] = json_decode($article, true)['id'];
        $params['alias'] = json_decode($article, true)['alias'];
        $params['fulltexts'] = json_decode($article, true)['description'];
        $params['title'] = json_decode($article, true)['title'];
        $params['publish_date'] = json_decode($article, true)['publish_date'];
        $params['foto_name'] = 'test';

        $get_api = file_get_contents('http://clothezon.com/api.shierproject.com/public/api-index-article');
        $params['artikelterkait'] = json_decode($get_api);

        $agent = new Agent();
        $device = $agent->device();
        if($article != ''){
            if($agent->isPhone()){
                return view('detail-mobile')->with($params);
            }else{
                return view('detail-new')->with($params);
            }
        }else{
            return redirect()->route('/');
        }

    }


    public function getMenu(){
        //$data = file_get_contents('http://cms-shierproject.local/api-menu');
        $data = file_get_contents('http://clothezon.com/api.shierproject.com/public/api-menu');
        echo $data;
    }
}
