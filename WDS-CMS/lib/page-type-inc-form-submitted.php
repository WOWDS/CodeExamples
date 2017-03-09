<?
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		include 'page-type-inc-posted-data.php';
	}else{
		include 'page-type-inc-form.php';
	}