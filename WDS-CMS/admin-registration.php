<?
require 'login-lib/password-compatibility-library.php';
require_once 'lib/config.php';
require 'login-lib/en.php';
require 'login-lib/PHPMailer.php';
require 'login-lib/Login.php';
$login				= new Login();
require 'login-lib/Registration.php';
$registration = new Registration();
require '../lib/mailto.php';
include 'lib/omnipresent-queries.php';
include 'lib/page-head.php';
	include 'lib/page-header.php';
	if($login->isUserLoggedIn() == true){
	include 'lib/page-main-nav.php';
	}else{
	include 'lib/login-main-nav.php';
	}
		echo'
		<div id="wrap">
			<div class="row">
				<div class="columns">';
					// show potential errors / feedback (from registration object)
					if(isset($registration)){
						if($registration->errors){
							foreach($registration->errors as $error){
								echo'
								<div class="row">
									<div class="medium-8 large-6 columns medium-centered large-centered">
										<div class="callout alert">
											<h5>ERROR</h5>
											<p>'.$error.'</p>
										</div>
									</div>
								</div>';
							}
						}
						if($registration->messages){
							foreach($registration->messages as $message){
								echo'
								<div class="row">
									<div class="medium-8 large-6 columns medium-centered large-centered">
										<div class="callout success">
											<h5>SUCCESS</h5>
											<p>'.$message.'</p>
											<a href="'.LOG_DIR.'" class="button fullw">LOGIN</a>
										</div>
									</div>
								</div>';
							}
						}
					}
					include 'login-lib/register-form-inc.php';
				echo'
				</div>
			</div>
		</div>';
		include 'lib/page-footer.php';
		include 'lib/omnipresent-js.php';
	echo $HTMLClose;
?>