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

        $agent = new Agent();
        $device = $agent->device();
        
        $get_api = file_get_contents('http://api.shierproject.com/api-index-article/'.env('APP_KEY'));
        $params['data'] = json_decode($get_api);

        $params['artikelterkait'] = $this->articleTerkait();

        // $api_kawal_corona = file_get_contents('https://api.kawalcorona.com/indonesia');
        // $params['parse'] = json_decode($api_kawal_corona, true);

        $data_category = file_get_contents('http://api.shierproject.com/api-menu/'.env('APP_KEY'));
        $params['data_category'] = json_decode($data_category);

        // dd($params['data_category']);

        if($agent->isPhone()){
            return view('index-mobile-new')->with($params);
        }else{
            return view('index-new')->with($params);
        }
    }

    public function indexCategory($title_category=""){
        $data_category = $this->getCategory($title_category);
        $params['image_category'] = $data_category['data']->image;
        $params['id_category'] = $data_category['data']->id;
        $params['title_category'] = $data_category['data']->title;
        $params['url_category'] = $data_category['data']->url_title;

        $get_api = file_get_contents('http://api.shierproject.com/data-category/'.env('APP_KEY').'/'.$title_category);
        $params['data'] = json_decode($get_api);

        return $params;
    }

    public function category($title_category=""){
        $data_category = $this->getCategory($title_category);
        $params['image_category'] = $data_category['data']->image;
        $params['id_category'] = $data_category['data']->id;
        $params['title_category'] = $data_category['data']->title;
        $params['url_category'] = $data_category['data']->url_title;

        $get_api = file_get_contents('http://api.shierproject.com/data-category/'.env('APP_KEY').'/'.$title_category);
        $params['data'] = json_decode($get_api);

        $agent = new Agent();
        $device = $agent->device();
        if($agent->isPhone()){
            return view('category-mobile-new')->with($params);
        }else{
            return view('category')->with($params);
        }
    }

    public function detailArticle($title_category, $alias){
        $data_category = $this->getCategory($title_category);
        $params['image_category'] = $data_category['data']->image;
        $params['id_category'] = $data_category['data']->id;
        $params['title_category'] = $data_category['data']->title;
        $params['url_category'] = $data_category['data']->url_title;

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

        $get_api_tags = file_get_contents('http://api.shierproject.com/data-tags/'.env('APP_KEY').'/'.$params['id']);
	    $params['tags_article'] = json_decode($get_api_tags);

        if($params['id_category'] == $params['category']){
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
        }else{
            echo "Maaf, Artikel yang Anda Cari Tidak Ditemukan...";
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

    public function getCategory($title_category){
        $get_api = file_get_contents('http://api.shierproject.com/category/'.env('APP_KEY').'/'.$title_category);
        $params['data'] = json_decode($get_api);
        return $params;

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
