<?
require 'login-lib/password-compatibility-library.php';
require_once 'lib/config.php';
require 'login-lib/en.php';
require 'login-lib/PHPMailer.php';
require 'login-lib/Login.php';
$login				= new Login();
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
				<div class="small columns">';
					// show potential errors / feedback (from login object)
					if(isset($login)){
						if($login->errors){
							foreach($login->errors as $error){
								echo'
								<div class="row">
									<div class="medium-8 large-6 columns medium-centered large-centered">
										<div class="callout alert">
											<h5>ERROR</h5>
											<p>'.$error.'</p>
											<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									</div>
								</div>';
							}
						}
						if($login->messages){
							foreach($login->messages as $message){
								echo'
								<div class="row">
									<div class="medium-8 large-6 columns medium-centered large-centered">
										<div class="success callout" data-closable>
											<h5>SUCCESS</h5>
											<p>'.$message.'</p>
											<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
									</div>
								</div>';
							}
						}
					}
					if($login->passwordResetWasSuccessful() == true && $login->passwordResetLinkIsValid() != true){
						include 'login-lib/login-form-inc.php';
					}else{
						include 'login-lib/password-reset-form.php';
					}
				echo'
				</div>
			</div>
		</div>';
		include 'lib/page-footer.php';
		include 'lib/omnipresent-js.php';
	echo $HTMLClose;
?>