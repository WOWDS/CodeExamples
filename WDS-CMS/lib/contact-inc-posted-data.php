<?
		// Field: Contact Name
		if(!empty($_POST['FName'])){
			$FName										= $mysqli->real_escape_string(name_var($_POST['FName']));
		}else{
			$FName										= $_POST['FName'];
		}
		// Field: Business Name
		if(!empty($_POST['BName'])){
			$BName										= $mysqli->real_escape_string(bus_var($_POST['BName']));
		}else{
			$BName										= '';
		}
		// Field: Address 1
		if(!empty($_POST['Add1'])){
			$Add1											= $mysqli->real_escape_string(title_var($_POST['Add1']));
		}else{
			$Add1											= '';
		}
		// Field: Address 2
		if(!empty($_POST['Add2'])){
			$Add2											= $mysqli->real_escape_string(title_var($_POST['Add2']));
		}else{
			$Add2											= '';
		}
		// Field: Address 3
		if(!empty($_POST['Add3'])){
			$Add3											= $mysqli->real_escape_string(title_var($_POST['Add3']));
		}else{
			$Add3											= '';
		}
		// Field: City
		if(!empty($_POST['City'])){
			$City												= $mysqli->real_escape_string(title_var($_POST['City']));
		}else{
			$City												= '';
		}
		// Field: County
		if(!empty($_POST['County'])){
			$County										= $mysqli->real_escape_string(title_var($_POST['County']));
		}else{
			$County										= '';
		}
		// Field: Postcode
		if(!empty($_POST['PCode'])){
			$PCode											= $mysqli->real_escape_string(postcode_var($_POST['PCode']));
		}else{
			$PCode											= '';
		}
		// Field: Country
		if(!empty($_POST['Country'])){
			$Country										= $mysqli->real_escape_string(title_var($_POST['Country']));
		}else{
			$Country										= '';
		}
		// Field: Latitude
		if(!empty($_POST['Lat'])){
			$Lat												= $mysqli->real_escape_string(generic_var($_POST['Lat']));
		}else{
			$Lat												= '';
		}
		// Field: Longitude
		if(!empty($_POST['Lng'])){
			$Lng												= $mysqli->real_escape_string(generic_var($_POST['Lng']));
		}else{
			$Lng												= '';
		}
		// Field: Telephone
		if(!empty($_POST['Tel'])){
			$Tel												= $mysqli->real_escape_string(tel_var($_POST['Tel']));
		}else{
			$Tel												= '';
		}
		// Field: Mobile
		if(!empty($_POST['Mob'])){
			$Mob												= $mysqli->real_escape_string(tel_var($_POST['Mob']));
		}else{
			$Mob												= '';
		}
		// Field: Fax
		if(!empty($_POST['Fax'])){
			$Fax												= $mysqli->real_escape_string(tel_var($_POST['Fax']));
		}else{
			$Fax												= '';
		}
		// Field: Email
		if(!empty($_POST['Email'])){
			$Email											= $mysqli->real_escape_string(email_var($_POST['Email']));
		}else{
			$Email											= '';
		}
		// Field: Website
		if(!empty($_POST['URL'])){
			$URL												= $mysqli->real_escape_string(url_var_www($_POST['URL']));
		}else{
			$URL												= '';
		}
		// Field: Registration Number Text
		if(!empty($_POST['RegNo'])){
			$RegNo											= textarea_var($_POST['RegNo']);
			$RegNo											= htmlspecialchars_decode($RegNo, ENT_COMPAT);
			$RegNo											= str_replace('\r\n', '', $RegNo);
		}else{
			$RegNo											= '';
		}
		// Field: Opening Hours Text
		if(!empty($_POST['OH'])){
			$OH												= textarea_var($_POST['OH']);
			$OH												= htmlspecialchars_decode($OH, ENT_COMPAT);
			$OH												= str_replace('\r\n', '', $OH);
		}else{
			$OH												= '';
		}
		// Field: Facebook ID
		if(!empty($_POST['FBID'])){
			$FBID											= $mysqli->real_escape_string(generic_var($_POST['FBID']));
		}else{
			$FBID											= '';
		}
		// Field: Facebook Application ID
		if(!empty($_POST['FBAPPID'])){
			$FBAPPID									= $mysqli->real_escape_string(generic_var($_POST['FBAPPID']));
		}else{
			$FBAPPID									= '';
		}
		// Field: Facebook Page
		if(!empty($_POST['FBPage'])){
			$FBPage										= $mysqli->real_escape_string(generic_var($_POST['FBPage']));
		}else{
			$FBPage										= '';
		}
		// Field: Facebook Image
		if(!empty($_POST['FBIMG'])){
			$FBIMG											= $mysqli->real_escape_string(generic_var($_POST['FBIMG']));
		}else{
			$FBIMG											= '';
		}
		// Field: Insert Statement
		if(!$insert_stmt				= $mysqli->prepare("UPDATE CDI SET FName = ?, BName = ?, Add1 = ?, Add2 = ?, Add3 = ?, City = ?, County = ?, PCode = ?, Country = ?, Lat = ?, Lng = ?, Tel = ?, Mob = ?, Fax = ?, Email = ?, URL = ?, RegNo = ?, OH = ?, FBID = ?, FBAPPID = ?, FBPage = ?, FBIMG = ?")){
			echo'
			<div class="alert callout">
				<p><strong>ERRORS:</strong></p>
				<p>Prepare failed: ('.$mysqli->errno.') '.$mysqli->error.'</p>
				<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
			include 'contact-inc-form.php';
		}else{
			if(!$insert_stmt->bind_param('ssssssssssssssssssssss', $FName, $BName, $Add1, $Add2, $Add3, $City, $County, $PCode, $Country, $Lat, $Lng, $Tel, $Mob, $Fax, $Email, $URL, $RegNo, $OH, $FBID, $FBAPPID, $FBPage, $FBIMG)){
				echo'
				<div class="alert callout">
					<p><strong>ERRORS:</strong></p>
					<p>Binding parameters failed: ('.$stmt->errno.') '.$stmt->error.'</p>
					<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
						<span aria-hidden="true">&times;</span>
					</button>
				</div>';
				include 'contact-inc-form.php';
			}else{
				// Execute the prepared query
				if(!$insert_stmt->execute()){
					echo'
					<div class="alert callout">
						<p><strong>ERRORS:</strong></p>
						<p>Execute failed: ('.$insert_stmt->errno.') '.$insert_stmt->error.'</p>
						<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
							<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					include 'contact-inc-form.php';
				}else{
					$insert_stmt->free_result();
				}
			}
		}
		echo'
		<div class="columns">
			<div class="primary callout">
				<p><strong class="wdsgn">SUCCESS!</strong> You have amended your business contact details <a href="'.CMS_DIR.'contact-details.php" class="button">RELOAD FORM <span class="ord icons"></span></a>
				<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>';