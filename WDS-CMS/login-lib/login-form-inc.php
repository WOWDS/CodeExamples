<?
					if (!$registration->registration_successful && !$registration->verification_successful) {
					echo'
					<div class="row">
						<div class="medium-8 large-6 columns medium-centered large-centered">
							<h1>'.WORDING_LOG_ADMIN_HEADER.'</h1>
							<form method="post" action="maryr-login.php" name="loginform">
								<label for="user_name">'.WORDING_USERNAME.$Req.' <span data-tooltip aria-haspopup="true" class="has-tip" title="'.WORDING_USERNAME_TIP.'">?</span>
								<input id="user_name" type="text" name="user_name" required /></label>
								<label for="user_password">'.WORDING_PASSWORD.$Req.'
								<input id="user_password" type="password" name="user_password" autocomplete="off" required /></label>
								<p>'.WORDING_REMEMBER_ME.'</p>
								<div class="row">
									<div class="medium-6 columns">
										<div class="switch large">
											<input class="switch-input" id="user_rememberme" type="checkbox" name="user_rememberme">
											<label class="switch-paddle" for="user_rememberme">
												<span class="show-for-sr">'.WORDING_REMEMBER_ME.'</span>
												<span class="switch-active" aria-hidden="true">Yes</span>
												<span class="switch-inactive" aria-hidden="true">No</span>
											</label>
										</div>
									</div>
									<div class="medium-6 columns">
										<p><input class="success button fullw" type="submit" name="login" value="'.WORDING_LOGIN.'" /></p>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div id="RF" class="row">
						<div class="medium-8 large-6 columns medium-centered large-centered">
							<div class="row">
								<div class="medium-6 columns">
									<a class="button fullw" href="admin-registration.php">'.WORDING_REGISTER_NEW_ACCOUNT.'</a>
								</div>
								<div class="medium-6 columns">
									<a class="button fullw" href="password-reset.php">'.WORDING_FORGOT_MY_PASSWORD.'</a>
								</div>
							</div>
						</div>
					</div>';
					}
?>
