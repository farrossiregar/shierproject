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
        //$params['populer'] = $this->populerArticle();
        //print_r($top_article); die();

        $api_kawal_corona = file_get_contents('https://api.kawalcorona.com/indonesia');
        $params['parse'] = json_decode($api_kawal_corona, true);

        $agent = new Agent();
        $device = $agent->device();
        
        $get_api = file_get_contents('http://api.shierproject.com/api-index-article/'.env('APP_KEY'));
        $params['data'] = json_decode($get_api);

        //$params['artikelterkait'] = $this->relatedArticle('2', '3');
        $params['artikelterkait'] = $this->articleTerkait();

        if($agent->isPhone()){
            return view('index-mobile-new')->with($params);
        }else{
            return view('index-new')->with($params);
        }
        
    }

    public function populerArticle(){
        $id = 'ga%3A211662009';
        $top_article = file_get_contents('https://www.googleapis.com/analytics/v3/data/ga?ids='.$id.'&start-date=30daysAgo&end-date=yesterday&metrics=ga%3Ausers&dimensions=ga%3ApagePath&sort=ga%3Ausers%2C-ga%3ApagePath&segment=gaid%3A%3A-1&access_token=ya29.a0Adw1xeVSNT1c3C2Bl_9VHPwaX1s7d3Ak6b_p133VXMKZ4hkowjskaGv6ImnIJJVRxeWbjZNmpghEXD0JJ0MyoZfFjHiboWu5NWmfkuxTz5D16vD7OTq1-kGsBiKrTgns3oTh8SQoEsv7Yobv9MjaCXRjbTJbv9lKXzds');
        $top = json_encode(json_decode($top_article), TRUE);
        $row = json_decode($top, true)['rows'];
        return $row;
    }

    public function articleTerkait(){
        $get_api = file_get_contents('http://api.shierproject.com/api-index-article/'.env('APP_KEY'));
        $data = json_decode($get_api);
        return $data;
    }

    public function detail($alias){

        $article = file_get_contents('http://api.shierproject.com/api-detail-article/'.env('APP_KEY').'/'.$alias);
        $arr = json_encode(json_decode($article), TRUE);

        $params['id'] = json_decode($article, true)['id'];
        $params['alias'] = json_decode($article, true)['alias'];
        $params['fulltexts'] = json_decode($article, true)['description'];
        $params['title'] = json_decode($article, true)['title'];
        $params['category'] = json_decode($article, true)['category_id'];
        $params['publish_date'] = json_decode($article, true)['publish_date'];
        $params['source'] = json_decode($article, true)['source'];
        $params['link'] = json_decode($article, true)['link'];
        $params['foto_name'] = json_decode($article, true)['image_name'];
        $params['image_source'] = json_decode($article, true)['image_source'];
        $params['image_caption'] = json_decode($article, true)['image_caption'];

        $params['artikelterkait'] = $this->relatedArticle($params['category'], $params['id']);

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
        $menu = file_get_contents('http://api.shierproject.com/api-menu/'.env('APP_KEY'));
        echo $menu;
    }

    public function getCategory($category){
        $get_api = file_get_contents('http://api.shierproject.com/category/'.env('APP_KEY').'/'.$category);
        $params['data'] = json_decode($get_api);
        $params['id_category'] = $category;
        //return view('category')->with($params);

        $agent = new Agent();
        $device = $agent->device();
        if($agent->isPhone()){
            return view('category-mobile-new')->with($params);
        }else{
            return view('category')->with($params);
        }
    }

    public function relatedArticle($category, $id_category){
        $get_api = file_get_contents('http://api.shierproject.com/related-article/'.env('APP_KEY').'/'.$category.'/'.$id_category);  
        $params['data'] = json_decode($get_api);
        return $params;
    }

    public function contactUs(){
        return view('contact-us');
    }
}
