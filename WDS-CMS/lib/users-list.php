<?
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$PTID										= $_POST['PTID'];
		$uid											= $_POST['uid'];
		foreach($uid as $value){
			$mysqli->query("DELETE FROM users WHERE user_id = '".$value."'");
		}
		include 'users-list-form-inc.php';
	}else{
		include 'users-list-form-inc.php';
	}