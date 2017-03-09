<?
require 'login-lib/password-compatibility-library.php';
require_once 'lib/config.php';
require 'login-lib/en.php';
require 'login-lib/Login.php';
$login				= new Login();
if($login->isUserLoggedIn() == true){
include 'lib/omnipresent-queries.php';
include 'lib/page-head.php';
	include 'lib/page-header.php';
	include 'lib/page-main-nav.php';
	echo'
	<div id="wrap">
		<div class="row">
			<div class="columns">
				<div class="row">';
				include 'login-lib/edit-form-inc.php';
				echo'
			</div>
		</div>
	</div>
	';
	include 'lib/page-footer.php';
	include 'lib/omnipresent-js.php';
	echo $HTMLClose;
}else{
	header("Location: ".LOG_DIR);
	exit();
}
?>