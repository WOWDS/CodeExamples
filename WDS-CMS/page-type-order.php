<?
require 'login-lib/password-compatibility-library.php';
require_once 'lib/config.php';
require 'login-lib/en.php';
require 'login-lib/Login.php';
$login				= new Login();
if($login->isUserLoggedIn() == true){
include 'lib/omnipresent-queries.php';
include 'lib/post-info.php';
include 'lib/post-type.php';
include 'lib/page-head.php';
	include 'lib/page-header.php';
	include 'lib/page-main-nav.php';
		//echo '<p>FT: '.$FT.' | PID: '.$PID.' | PTID: '.$PTID.'</p>';
		echo'
		<div id="wrap">
			<div class="row">';
				include 'lib/pages-type-inc-order-form.php';
				echo'
			</div>
		</div>';
		include 'lib/page-footer.php';
		include 'lib/omnipresent-js.php';
	echo $HTMLClose;
}else{
	header("Location: ".LOG_DIR);
	exit();
}
?>