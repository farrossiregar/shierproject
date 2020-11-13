<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class SitemapController extends Controller
{
    public function index(){
       $data_category = file_get_contents('http://api.shierproject.com/api-menu/'.env('APP_KEY'));
       $params['data_category'] = json_decode($data_category);
        
        
        return response()->view('sitemap.sitemap', [
            'sitemap' => $params
          ])->header('Content-Type', 'text/xml');
    }

   
}
