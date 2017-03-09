<?
					if ($login->passwordResetLinkIsValid() == true) {
					echo'
					<div class="row">
						<div class="medium-8 large-6 columns medium-centered large-centered">
							<h1>'.WORDING_PASS_RESET_HEADER.'</h1>
							<form method="post" action="password-reset.php" name="new_password_form">
								<input type="hidden" name="user_name" value="'.htmlspecialchars($_GET["user_name"]).'">
								<input type="hidden" name="user_password_reset_hash" value="'.htmlspecialchars($_GET["verification_code"]).'">
								<label for="user_password_new">'.WORDING_NEW_PASSWORD.$Req.' <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" title="'.WORDING_REGISTRATION_PASSWORD.'">?</span>
								<input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off"></label>
								<label for="user_password_repeat">'.WORDING_NEW_PASSWORD_REPEAT.$Req.' <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" title="'.WORDING_REGISTRATION_PASSWORD_REPEAT.'">?</span>
								<input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off"></label>
								<div class="row">
									<div class="medium-6 columns">
										<input class="success button fullw" type="submit" name="submit_new_password" value="'.WORDING_SUBMIT_NEW_PASSWORD.'">
									</div>
									<div class="medium-6 columns">
										<p><a href="'.LOG_DIR.'" class="button fullw">'.WORDING_BACK_TO_LOGIN.'</a></p>
									</div>
								</div>
							</form>
						</div>
					</div>';
					} else {
					echo'
					<div class="row">
						<div class="medium-8 large-6 columns medium-centered large-centered">
							<h1>'.WORDING_PASS_REQUEST_HEADER.'</h1>
							<form method="post" action="password-reset.php" name="password_reset_form">
								<label for="user_name">'.WORDING_REQUEST_PASSWORD_RESET.' <span data-tooltip aria-haspopup="true" class="has-tip top" data-disable-hover="false" title="'.WORDING_REQUEST_PASSWORD_RESET_TIP.'">?</span>
								<input id="user_name" type="text" name="user_name" required /></label>
								<div class="row">
									<div class="medium-6 columns">
										<p><input class="success button fullw" type="submit" name="request_password_reset" value="'.WORDING_RESET_PASSWORD.'"></p>
									</div>
									<div class="medium-6 columns">
										<p><a href="'.LOG_DIR.'" class="button fullw">'.WORDING_BACK_TO_LOGIN.'</a></p>
									</div>
								</div>
							</form>
						</div>
					</div>';
					}
?>