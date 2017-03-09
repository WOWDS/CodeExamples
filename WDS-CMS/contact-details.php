<?
require 'login-lib/password-compatibility-library.php';
require_once 'lib/config.php';
require 'login-lib/en.php';
require 'login-lib/Login.php';
$login				= new Login();
if($login->isUserLoggedIn() == true){
include 'lib/omnipresent-queries.php';
include 'lib/contact-details.php';
include 'lib/page-head.php';
	include 'lib/page-header.php';
	include 'lib/page-main-nav.php';
		echo'
		<div id="wrap">
			<div class="row">
				<div class="small-12 columns">
					<h1>Contact Details</h1>
					<hr class="HRD show-for-small-only" aria-hidden="true">
				</div>
				<hr class="HRD show-for-medium" aria-hidden="true">
				<div class="columns">
					<ul class="accordion" data-accordion data-allow-all-closed="true">
						<li class="accordion-item" data-accordion-item>
							<a href="#" class="accordion-title">Important Information</a>
							<div class="accordion-content" data-tab-content>
								'.$PTTxt.'
							</div>
						</li>
					</ul>
				</div>
				<hr class="HRD show-for-medium" aria-hidden="true">';
				include 'lib/contact-inc-form-submitted.php';
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