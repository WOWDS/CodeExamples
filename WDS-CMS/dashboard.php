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
					<div class="row">
						<div class="small-12 large-4 columns">
							<h1 class="nomrg">Dashboard <span class="db icons"></span></h1>
							<hr class="HRD show-for-small-only" aria-hidden="true">
						</div>';
						include 'lib/dashboard-quick-add.php';
					echo'
					</div>
					<hr class="HRD show-for-small-only" aria-hidden="true">
				</div>
				<hr class="HRD show-for-medium" aria-hidden="true">
			</div>
			<div class="row">';
				//include 'lib/icons.php';
				include 'lib/dashboard-latest.php';
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