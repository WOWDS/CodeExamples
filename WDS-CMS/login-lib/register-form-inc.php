<?
					if (!$registration->registration_successful && !$registration->verification_successful) {
					echo'
					<div class="row">
						<div class="medium-8 large-6 columns medium-centered large-centered">
							<h1>'.WORDING_REG_ADMIN_HEADER.'</h1>
							<form method="post" action="admin-registration.php" name="registerform">
								<label for="user_name">Username'.$Req.' <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" title="'.WORDING_REGISTRATION_USERNAME.'">?</span>
								<input id="user_name" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required value=""></label>
								<label for="user_email">Email Address'.$Req.' <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" title="'.WORDING_REGISTRATION_EMAIL.'">?</span>
								<input id="user_email" type="email" name="user_email" required value=""></label>
								<label for="user_password_new">Password'.$Req.' <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" title="'.WORDING_REGISTRATION_PASSWORD.'">?</span>
								<input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" value=""></label>
								<label for="user_password_repeat">Repeat Password'.$Req.' <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" title="'.WORDING_REGISTRATION_PASSWORD_REPEAT.'">?</span>
								<input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" value=""></label>
								<p><img src="'.$BASE_DIR.'login-lib/showCaptcha.php" alt="captcha"></p>
								<label>'.WORDING_REGISTRATION_CAPTCHA.$Req.'
								<input type="text" name="captcha" required></label>
								<div class="row">
									<div class="medium-6 columns">
										<p><input type="submit" name="register" class="success button fullw" value="'.WORDING_REGISTER.'"></p>
									</div>
									<div class="medium-6 columns">';
										if ($login->isUserLoggedIn() == true) {
										echo'
										<p><a href="'.CMS_DIR.'dashboard.php" class="button fullw">'.WORDING_BACK_TO_DASHBOARD.'</a></p>';
										} else {
										echo'
										<p><a href="'.LOG_DIR.'" class="button fullw">'.WORDING_BACK_TO_LOGIN.'</a></p>';
										}
									echo'
									</div>
								</div>
							</form>
						</div>
					</div>';
					}
?>