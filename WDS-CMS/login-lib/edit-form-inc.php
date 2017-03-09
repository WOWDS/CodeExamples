<?
					echo'
					<div class="row">
						<div class="medium-8 large-6 columns medium-centered large-centered">
							<h1>'.WORDING_EDIT_ADMIN_HEADER.'</h1>
							<h5>USERNAME</h5>
							<form method="post" action="user-edit.php" name="user_edit_form_name">
							<label for="user_name">'.WORDING_NEW_USERNAME.$Req.' <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" title="'.WORDING_REGISTRATION_USERNAME.'">?</span>
							<input id="user_name" type="text" name="user_name" pattern="[a-zA-Z0-9]{2,64}" required value="'.htmlspecialchars($_SESSION['user_name']).'"></label>
							<div class="row">
								<div class="medium-6 columns">
									<input type="submit" name="user_edit_submit_name" class="success button fullw" value="'.WORDING_CHANGE_USERNAME.'">
								</div>
							</div>
							</form>
							<hr>
							<h5>EMAIL ADDRESS</h5>
							<form method="post" action="user-edit.php" name="user_edit_form_email">
							<label for="user_email">'.WORDING_NEW_EMAIL.$Req.' <span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" title="'.WORDING_REGISTRATION_EMAIL.'">?</span>
							<input id="user_email" type="email" name="user_email" required value="'.$_SESSION['user_email'].'"></label>
							<div class="row">
								<div class="medium-6 columns">
									<input type="submit" name="user_edit_submit_email" class="success button fullw" value="'.WORDING_CHANGE_EMAIL.'">
								</div>
							</div>
							</form>
							<hr>
							<h5>PASSWORD</h5>
							<form method="post" action="user-edit.php" name="user_edit_form_password">
							<label for="user_password_old">'.WORDING_OLD_PASSWORD.'</label>
							<input id="user_password_old" type="password" name="user_password_old" autocomplete="off" />
							
							<label for="user_password_new">'.WORDING_NEW_PASSWORD.'</label>
							<input id="user_password_new" type="password" name="user_password_new" autocomplete="off" />
							
							<label for="user_password_repeat">'.WORDING_NEW_PASSWORD_REPEAT.'</label>
							<input id="user_password_repeat" type="password" name="user_password_repeat" autocomplete="off" />
							<div class="row">
								<div class="medium-6 columns">
									<input type="submit" name="user_edit_submit_password" class="success button fullw" value="'.WORDING_CHANGE_PASSWORD.'">
								</div>
								<div class="medium-6 columns">
									<a class="button fullw" href="password-reset.php">'.WORDING_FORGOT_MY_PASSWORD.'</a>
								</div>
							</div>
							</form>
						</div>
					</div>';
?>
