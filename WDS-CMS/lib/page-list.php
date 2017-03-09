<?
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$PTID											= $_POST['PTID'];
		$pid												= $_POST['pid'];
		foreach ($pid as $postid) {
			$mysqli->query("DELETE FROM Posts WHERE PID = '".$postid."'");
		}
		include 'page-queries.php';
		include 'page-list-form-inc.php';
	}else{
		include 'page-queries.php';
		include 'page-list-form-inc.php';
	}