<?php 

/**
 * User Access
 * @return [type] [description]
 */
function test($id_category)
{
	$data_category = $this->getCategory($title_category);
	$params['image_category'] = $data_category['data']->image;
	$params['id_category'] = $data_category['data']->id;
	$params['title_category'] = $data_category['data']->title;
	$params['url_category'] = $data_category['data']->url_title;
}