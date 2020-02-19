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
        // $get_api = file_get_contents('https://origin.kompas.tv/rss/tribunnews');
        // dd($get_api);

        $xml = simplexml_load_file("https://origin.kompas.tv/rss/tribunnews");	
        $no=0;
        $datarep = array();

        foreach($xml->children() as $child)
        {
            foreach($child->item as $child2)
            {
                if($no <= 1){
                    $no++;
                    $title = $child2->title;
                    $bodytext = $child2->description;
                    $alias = "nasional/".date("Y/m/d/").$title;

                    $params['title'] = (string)$child2->title;
                    $params['alias'] = "nasional/".date("Y/m/d/").$child2->title;
                    $params['introtext'] = $child2->description;
                    $params['fulltexts'] = htmlentities($child2->description);

                    if($child2->youtubeID == '' && $child2->dailymotion_id == ''){
                        $params['youtube'] = '';
                    }else{
                        if($child2->youtubeID != ''){
                            $params['youtube'] = "https://www.youtube.com/watch?v=".$child2->youtubeID;
                        }else{
                            $params['youtube'] = "https://www.dailymotion.com/video/".$child2->dailymotion_id;
                        }
                    }
                    $params['section_id'] = '1';
                    $params['category_id'] = '1';
                    $params['source'] = '171';
                    $params['publish'] = '1';
                    $params['foto_name'] = $child2->image;
                    $params['frontpage_section'] = '0';	
                    $params['frontpage_category'] = '0';
                    $params['written_date'] = date("Y-m-d H:i:s");
                    $params['publish_date'] = date("Y-m-d H:i:s");

                }
            }
        }
        krsort($datarep);
        //$data = print json_encode($params);

        return view('detail')->with($params);
    }
}
