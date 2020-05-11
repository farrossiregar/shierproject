<?php 

/**
 * User Access
 * @return [type] [description]
 */

function category($title_category=""){
	$data_category = file_get_contents('http://api.shierproject.com/category/'.env('APP_KEY').'/'.$title_category);
	$params['data'] = json_decode($data_category);
	
	$params['image_category'] = $params['data']->image;
	$params['id_category'] = $params['data']->id;
	$params['title_category'] = $params['data']->title;
	$params['url_category'] = $params['data']->url_title;	
	
	return $params['image_category'];
}

function dataCategory($title_category=""){
	$data_article = file_get_contents('http://api.shierproject.com/data-category/'.env('APP_KEY').'/'.$title_category);
	$params['data_article'] = json_decode($data_article);

	return $params['data_article'];
}


function getCategory($title_category){
	$get_api = file_get_contents('http://api.shierproject.com/category/'.env('APP_KEY').'/'.$title_category);
	$params['data'] = json_decode($get_api);
	return $params;
}