<?
			echo'
			<div class="small-12 columns">
				<form accept-charset="UTF-8" method="POST" id="EditForm">
					<div class="row">
						<div class="small-12 columns">
							<div class="row">';
								if($_SESSION['AType'] == '1'){
								echo'
								<fieldset>
									<legend>Admin Type </legend>';
									echo'
									<div class="small-6 columns">
										<select id="AType" name="AType"> 
											<option value="0">Blank...</option>';
										// Get secondary navigation links
										$SMQ								= $mysqli->query("SELECT * FROM LoginTypes ORDER BY AType ASC");
										while($SMP					= $SMQ->fetch_assoc()){
											echo'
											<option value="'.$SMP['AType'].'"';if($AType == $SMP['AType']){echo' selected';}echo'>'.$SMP['Title'].'</option>';
											}
										echo'
										</select>
									</div>
									<div class="medium-6 columns">
										<h5 class="h5fltl">Activate <span class="wdsdg">/</span> <span class="wdslg">Deactivate</span></h5>
										<div class="switch radius">
											<input id="Activate" type="checkbox"';if($Activate === '1'){echo' checked';}echo' name="Activate" value="1">
											<label for="Activate"><span class="switch-on">A</span><span class="switch-off">D</span></label>
										</div>
									</div>
								</fieldset>';
								}
								echo'
								<fieldset>
									<legend>Personal Details</legend>
									<div class="medium-6 columns">
										<label>First Name <span class="wdsp">*</span>
										<input id="FName" name="FName" type="text" value="'.$FName.'">
										</label>
									</div>
									<div class="medium-6 columns">
										<label>Surname <span class="wdsp">*</span>
										<input id="SName" name="SName" type="text" value="'.$SName.'">
										</label>
									</div>
									<div class="medium-6 columns">
										<label>School Email <span class="wdsp">*</span> <span data-tooltip aria-haspopup="true" class="has-tip" title="This is used for internal communications.">?</span>
										<input id="SEmail" name="SEmail" type="email" value="'.$semail.'" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
										</label>
									</div>
									<div class="medium-6 columns">
										<label>Personal Email <span class="wdsp">* <small>(USERNAME)</small></span> <span data-tooltip aria-haspopup="true" class="has-tip" title="This will be used as your username when signing in. You <strong><span class=\'wdsp\'>MUST</span></strong> sign out and sign back in again if changed.">?</span>
										<input id="Email" name="Email" type="email" value="'.$email.'" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
										</label>
									</div>
								</fieldset>
								<fieldset>
									<legend>Change Password <span data-tooltip aria-haspopup="true" class="has-tip" title="Leave the fields below blank to retain your password. You <strong><span class=\'wdsp\'>MUST</span></strong> sign out and sign back in again if changed.">?</span></legend>
									<div class="medium-6 columns">
										<label>New Password <span class="wdsp"><small>(IF CHANGING)</small></span> <span data-tooltip aria-haspopup="true" class="has-tip" title="<strong>Passwords must be a minimum of 6 characters long and contain the following:</strong> at least <span class=\'wdsgn\'>one uppercase letter</span> (A-Z), at least <span class=\'wdsgn\'>one lowercase letter</span> (a-z), at least <span class=\'wdsgn\'>one number</span> (0-9).">?</span>
										<input id="pwd" name="pwd" type="password">
										</label>
									</div>
									<div class="medium-6 columns">
										<label>Confirm New Password <span class="wdsp"><small>(IF CHANGING)</small></span> <span data-tooltip aria-haspopup="true" class="has-tip" title="Your new password and confirmation password <span class=\'wdsgn\'>MUST</span> match exactly.">?</span>
										<input id="cpwd" name="cpwd" type="password">
										</label>
									</div>
								</fieldset>
							</div>
						</div>
						<div class="small-12 columns">
							<button type="submit" class="button success radius" form="EditForm" alt="Submit the form" value="GoForm" onclick="return regformhash(this.form,this.form.pwd,this.form.cpwd);">SUBMIT <span class="sb icons"></span></button>
						</div>
					</div>
				</form>
			</div>';