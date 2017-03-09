<?
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		include 'post-type-inc-posted-data.php';
	}else{
		include 'post-type-inc-form.php';
	}