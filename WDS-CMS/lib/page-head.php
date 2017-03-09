<?
echo '<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>'.$CMSBName.' CMS</title>
		<meta name="author" content="'.$CMSBName.'">
		<meta name="owner" content="WOW Design Solutions">
		<meta name="copyright" content="WOW Design Solutions">
		<meta name="rating" content="general"> 
		<meta name="robots" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">';
		include 'omnipresent-css.php';
		if(strpos($Page, 'maryr-login') !== false || strpos($Page, 'admin-registration') !== false || strpos($Page, 'password-reset') !== false){
		echo'
		<link rel="stylesheet" href="'.CMS_DIR.'css/login.css">';
		}
		if(strpos($Page, 'page-form') !== false || strpos($Page, 'user-edit') !== false){
		echo'
		<link rel="stylesheet" href="'.CMS_DIR.'css/page-form.css">';
		}
		if(strpos($Page, 'dashboard') !== false){
		echo'
		<link rel="stylesheet" href="'.CMS_DIR.'css/home.css">';
		}
		echo'
		<!--[if gte IE 9]>
			<style type="text/css">
				.gradient {filter:none}
			</style>
		<![endif]-->
	</head>
	<body>';