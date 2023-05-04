<?php 

$name = !empty($_REQUEST['name']) ? trim(strtolower($_REQUEST['name'])) : 'index';

$lists = [

	'index' => 'index',
	'mau-cv' => 'mau-cv',
	'tim-viec-lam' => 'tim-viec-lam',
	'chi-tiet-viec-lam' => 'chi-tiet-viec-lam',
	'viet-cv' => 'viet-cv',
	'quan-ly-cv' => 'quan-ly-cv',
	'tao-cv-v2' => 'tao-cv-v2',
	'404' => '404',
];


$template_path = 'template/';
$file_extension = ".php";

$not_found = 0;
// Page not in list
if(!array_key_exists($name, $lists)){
	$not_found = 1;
}else {
	$html_page = $template_path.$lists[$name].$file_extension;
	// check file not found
	if(file_exists($html_page)){
		require_once($html_page);
		die;
	}
	$not_found = 1;
}
// Display 404
$not_found ? require_once($template_path.'404'.$file_extension) : '';