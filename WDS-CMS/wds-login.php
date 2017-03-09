<?
require 'login-lib/password-compatibility-library.php';
require_once 'lib/config.php';
require 'login-lib/en.php';
require 'login-lib/Login.php';
$login = new Login();
include 'lib/omnipresent-queries.php';
include 'lib/page-head.php';
	include 'lib/page-header.php';
	include 'lib/login-main-nav.php';
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
					// ... ask if we are logged in here:
					if($login->isUserLoggedIn() == true){
						header("Location: ".CMS_DIR."dashboard.php");
						exit();
					}else{
						// the user is not logged in. you can do whatever you want here.
						// for demonstration purposes, we simply show the "you are not logged in" view.
						include 'login-lib/login-form-inc.php';
					}
				echo'
				</div>
			</div>
		</div>';
		include 'lib/page-footer.php';
		include 'lib/omnipresent-js.php';
	echo $HTMLClose;
?>