<?
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$error_msg 										= '';
		$AType													= $mysqli->real_escape_string($_POST['AType']);
		$Activate												= $mysqli->real_escape_string($_POST['Activate']);
		if(empty($Activate)){
			$Activate											='0';
		}
		// Check for first name
		if(!empty($_POST['FName'])){
			$FName											= $mysqli->real_escape_string(name_var($_POST['FName']));
		}else{
			$error_msg										.= '<p>You must enter a first name.</p>';
		}
		// Check for surname
		if(!empty($_POST['SName'])){
			$SName											= $mysqli->real_escape_string(name_var($_POST['SName']));
		}else{
			$error_msg										.= '<p>You must enter a surname.</p>';
		}
		// Create the username and reset the username and author session cookies
		if(!empty($_POST['FName']) && !empty($_POST['SName'])){
			$LEPage											= 'user-edit.php';
		}
		// Sanitize and validate the emails
		$semail													= filter_input(INPUT_POST, 'SEmail', FILTER_SANITIZE_EMAIL);
		$semail													= filter_var($semail, FILTER_VALIDATE_EMAIL);
		$email													= filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
		$email													= filter_var($email, FILTER_VALIDATE_EMAIL);
		// Not a valid email
		if(!filter_var($semail, FILTER_VALIDATE_EMAIL)){
			$error_msg										.= '<p>The school email address is not valid</p>';
		}
		// Not a valid email
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error_msg										.= '<p>The personal email address is not valid.</p>';
		}
		// Adding a password
		if((empty($_POST['p']) && empty($_POST['pc'])) || (!empty($_POST['p']) && empty($_POST['pc'])) || (empty($_POST['p']) && !empty($_POST['pc']))){
				$error_msg									.= '<p>You must fill in both the new and confirmation password fields.</p>';
		} elseif(!empty($_POST['p']) && !empty($_POST['pc'])){
			$password										= filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
			if(strlen($password) <> 128) {
				$error_msg									.= '<p>Invalid password configuration.</p>';
			}
			$cpassword										= filter_input(INPUT_POST, 'pc', FILTER_SANITIZE_STRING);
			if(strlen($cpassword) <> 128) {
				$error_msg									.= '<p>Invalid confirmation password configuration.</p>';
			}
			// Check confirmation password and the new password match
			if($password <> $cpassword) {
				$error_msg									.= '<p>The new password and confirmation password do not match.</p>';
			}
		}
		if(empty($error_msg)){
			// Create a random salt
			$random_salt									= hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
			// Create salted password 
			$password										= hash('sha512', $password.$random_salt);
			// Create salted password 
			$cpassword										= hash('sha512', $cpassword.$random_salt);
			// Insert the amends into the database 
			if(!$insert_stmt								= $mysqli->prepare("INSERT INTO Logins (FName, SName, UName, SEmail, Email, PWord, Salt, Activate, AType) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)")){
				echo "Prepare failed: (".$mysqli->errno.") ".$mysqli->error;
			}else{
				if(!$insert_stmt->bind_param('sssssssii', $FName, $SName, $UName, $semail, $email, $password, $random_salt, $Activate, $AType)){
					echo "Binding parameters failed: (".$stmt->errno.") ".$stmt->error;
				}else{
					// Execute the prepared query
					if(!$insert_stmt->execute()){
						echo "Execute failed: (".$insert_stmt->errno.") ".$insert_stmt->error;
					}else{
						$insert_stmt->free_result();
					}
				}
			}
			$SuccTxt											= '<p><strong class="wdsgn">SUCCESS!</strong> You have amended the login information for '.$UName.'. <a href="'.CMS_DIR.$LEPage.'" class="button radius">RELOAD FORM <span class="ord icons"></span></a> <a href="'.CMS_DIR.'logins.php" title="Go back to the list for &ldquo;Staff Types&rdquo;" class="button radius">BACK TO LIST <span class="rt icons"></span></a></p>';
			echo'
			<div class="panel callout radius small-12 columns">
			'.$SuccTxt.'
			</div>';
			//echo '<p>MCode: '.$MCode.'<br>FName: '.$FName.'<br>SName: '.$SName.'<br>UName: '.$UName.'<br>SEmail: '.$semail.'<br>Email: '.$email.'<br>Password: '.$password.'<br>Confirmation Password: '.$cpassword.'<br>Salt: '.$random_salt.'<br>Activate: '.$Activate.'<br>AType: '.$AType.'</p>';
		}else{
			echo'
			<div data-alert class="alert-box alert radius small-12 columns">
				<p><strong>ERRORS:</strong></p>
				'.$error_msg.'
				<a href="#" class="close">&times;</a>
			</div>';
			include 'users-add-inc-form.php';
		}
	}else{
		include 'users-add-inc-form.php';
	}