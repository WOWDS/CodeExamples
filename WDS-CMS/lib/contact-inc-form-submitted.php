<?
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		include 'contact-inc-posted-data.php';
	}else{
		include 'contact-inc-form.php';
	}