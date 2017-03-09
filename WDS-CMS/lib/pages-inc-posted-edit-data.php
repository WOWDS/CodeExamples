<?
	if(!empty($_POST['FT'])){
		$FT												= $mysqli->real_escape_string($_POST['FT']);
	}
	if(!empty($_POST['PID'])){
		$PID											= $mysqli->real_escape_string($_POST['PID']);
	}
	if(!empty($_POST['PTID'])){
		$PTID										= $mysqli->real_escape_string($_POST['PTID']);
	}
	if(!empty($_POST['FPTID'])){
		$FPTID										= $mysqli->real_escape_string($_POST['FPTID']);
	}else{
		$FPTID										= '0';
	}
	if(!empty($_POST['ParentID'])){
		$ParentID								= $mysqli->real_escape_string($_POST['ParentID']);
	}else{
		$ParentID								= '0';
	}
	if(!empty($_POST['Title'])){
		$Title											= $mysqli->real_escape_string(title_var($_POST['Title']));
	}else{
		$error_msg								.= '<p>You must enter a title.</p>';
	}
	if(!empty($_POST['SubTitle'])){
		$SubTitle									= $mysqli->real_escape_string(title_var($_POST['SubTitle']));
	}else{
		$SubTitle									= NULL;
	}
	// Field: NavTitle
	if(!empty($_POST['NavTitle'])){
		$NavTitle									= $mysqli->real_escape_string(title_var($_POST['NavTitle']));
	}else{
		$NavTitle									= $mysqli->real_escape_string(title_var($_POST['Title']));
	}
	// Field: Txt
	if(!empty($_POST['Txt'])){
		$Txt											= $mysqli->real_escape_string(textarea_var($_POST['Txt']));
		$Txt											= htmlspecialchars_decode($Txt, ENT_COMPAT);
		$Txt											= str_replace('\r\n', '', $Txt);
	}else{
		$Txt											= NULL;
	}
	// Field: Intro
	if(!empty($_POST['Intro'])){
		$Intro										= $mysqli->real_escape_string(textarea_var($_POST['Intro']));
		$Intro										= htmlspecialchars_decode($Intro, ENT_COMPAT);
		$Intro										= str_replace('\r\n', '', $Intro);
		if(!in_array($PTID, array(6, 7))){
		$Intro										= str_replace('<p class="lead">', '', $Intro);
		$Intro										= str_replace('</p>', '', $Intro);
		$Intro										= '<p class="lead">'.$Intro.'</p>';
		}
	}else{
		$Intro										= NULL;
	}
	if($PTID <> '10'){
		if($PTID == '12' && !empty($_POST['Lnk'])){
			$Lnk										= $mysqli->real_escape_string(url_var_www($_POST['Lnk']));
		}elseif($PTID == '12' && empty($_POST['Lnk'])){
			$error_msg							.= '<p>You must enter a link.</p>';
		}elseif($PTID <> '12' && !empty($_POST['Lnk'])){
			$Lnk										= $mysqli->real_escape_string(seoURL($_POST['Lnk']));
		}elseif($PTID <> '12' && empty($_POST['Lnk'])){
			$Lnk										= $mysqli->real_escape_string(seoURL($_POST['Title']));
		}
	}else{
		$Lnk											= NULL;
	}
	if(in_array($PTID, array(3, 10, 11, 12))){
		// Field: FLnk - folder link
		$FLnk												= 'general';
	}elseif ($PTID == '6') {
		// Field: FLnk - folder link
		$FLnk												= 'paintings-prints';
	}elseif ($PTID == '7') {
		// Field: FLnk - folder link
		$FLnk												= 'sketches';
	}elseif ($PTID == '9') {
		// Field: FLnk - folder link
		$FLnk												= 'news';
	}else{
		$FLnk												= NULL;
	}
	if($FT == 'edit'){
		$ADate										= $Today;
		$AAuthor									= $_SESSION['user_name'];
	}
	if($PTID == '9'){
		if(!empty($_POST['SDate'])){
			$SDate									= $mysqli->real_escape_string(generic_var($_POST['SDate']));
		}else{
			$SDate									= $Today;
		}
		$ECDate									= $mysqli->real_escape_string(generic_var($_POST['EDate']));
		if(empty($ECDate) || $ECDate == NULL || $ECDate == ""){
			$EDate									= $SDate;
		}else{
			$EDate									= $ECDate;
		}
	}else{
		$SDate										= '0000-00-00 00:00:00';
		$EDate										= '0000-00-00 00:00:00';
	}
	if(in_array($PTID, array(6, 7))){
		if(!empty($_POST['RefNo'])){
			$RefNo									= $mysqli->real_escape_string($_POST['RefNo']);
		}else{
			$RefNo									= NULL;
		}
		if(!empty($_POST['Med'])){
			$Med										= $mysqli->real_escape_string($_POST['Med']);
		}else{
			$Med										= NULL;
		}
		if(!empty($_POST['Size'])){
			$Size										= $mysqli->real_escape_string($_POST['Size']);
		}else{
			$Size										= NULL;
		}
		if(!empty($_POST['PRTSize'])){
			$PRTSize								= $mysqli->real_escape_string($_POST['PRTSize']);
		}else{
			$PRTSize								= NULL;
		}
		if(!empty($_POST['Original'])){
			$Original								= $mysqli->real_escape_string($_POST['Original']);
		}else{
			$Original								= '0';
		}
		if(!empty($_POST['Limited'])){
			$Limited								= $mysqli->real_escape_string($_POST['Limited']);
		}else{
			$Limited								= '0';
		}
		if(!empty($_POST['Sketchbook'])){
			$Sketchbook						= $mysqli->real_escape_string($_POST['Sketchbook']);
		}else{
			$Sketchbook						= '0';
		}
		if(!empty($_POST['Sold'])){
			$Sold										= $mysqli->real_escape_string($_POST['Sold']);
		}else{
			$Sold										= '0';
		}
		if(!empty($_POST['NFS'])){
			$NFS										= $mysqli->real_escape_string($_POST['NFS']);
		}else{
			$NFS										= '0';
		}
		if(!empty($_POST['Promo'])){
			$Promo									= $mysqli->real_escape_string($_POST['Promo']);
		}else{
			$Promo									= '0';
		}
	}else{
		$RefNo										= NULL;
		$Med											= NULL;
		$Size											= NULL;
		$PRTSize									= NULL;
		$Original									= '0';
		$Limited									= '0';
		$Sketchbook							= '0';
		$Sold											= '0';
		$NFS											= '0';
		$Promo										= '0';
	}
	if($Size <> NULL && $Original == '0'){
		$Original									= '1';
	}
	if($PRTSize <> NULL && $Limited == '0'){
		$Limited									= '1';
	}
	if(in_array($PTID, array(10, 11))){
		$TAGTitle									= NULL;
		$Dsc											= NULL;
		$KeyW										= NULL;
	}else{
		if(!empty($_POST['TAGTitle'])){
			$TAGTitle								= $mysqli->real_escape_string(title_var($_POST['TAGTitle']));
		}else{
			$TAGTitle								= $Title;
		}
		if(!empty($_POST['Dsc'])){
			$Dsc										= $mysqli->real_escape_string(seoD($_POST['Dsc']));
		}else{
			$Dsc										= $mysqli->real_escape_string(seoD($_POST['Title']));
		}
		if(!empty($_POST['KeyW'])){
			$KeyW									= $mysqli->real_escape_string(seoK($_POST['KeyW']));
		}else{
			$KeyW									= $mysqli->real_escape_string(seoK($_POST['Title']));
		}
	}
	if(!empty($_POST['Activated'])){
		$Activated								= $mysqli->real_escape_string($_POST['Activated']);
	}else{
		$Activated								= '0';
	}
	if(empty($error_msg)){
		// EDIT
		//PID = ?, PTID = ?, ParentID = ?, Title = ?, SubTitle = ?, NavTitle = ?, Lnk = ?, FLnk = ?, Intro = ?, Txt = ?, RefNo = ?, Med = ?, Size = ?, PRTSize = ?, SDate = ?, EDate = ?, PDate = ?, Author = ?, ADate = ?, TAGTitle = ?, Dsc = ?, KeyW = ?, Original = ?, Limited = ?, Sketchbook = ?, Sold = ?, NFS = ?, Promo = ?, Activated = ?
		//$PID, $FPTID, $ParentID, $Title, $SubTitle, $NavTitle, $Lnk, $FLnk, $Intro, $Txt, $RefNo, $Med, $Size, $PRTSize, $SDate, $EDate, $PDate, $Author, $ADate, $TAGTitle, $Dsc, $KeyW, $Original, $Limited, $Sketchbook, $Sold, $NFS, $Promo, $Activated
		if(!$insert_stmt						= $mysqli->prepare("UPDATE Posts SET PTID = ?, ParentID = ?, Title = ?, SubTitle = ?, NavTitle = ?, Lnk = ?, FLnk = ?, Intro = ?, Txt = ?, RefNo = ?, Med = ?, Size = ?, PRTSize = ?, SDate = ?, EDate = ?, ADate = ?, TAGTitle = ?, Dsc = ?, KeyW = ?, Original = ?, Limited = ?, Sketchbook = ?, Sold = ?, NFS = ?, Promo = ?, Activated = ? WHERE PID = ?")){
			echo'
			<div class="alert callout">
				<p><strong>ERRORS:</strong></p>
				<p>Prepare failed: ('.$mysqli->errno.') '.$mysqli->error.'</p>
				<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
			include 'pages-inc-form.php';
		}else{
			if(!$insert_stmt->bind_param('iisssssssssssssssssiiiiiiid', $FPTID, $ParentID, $Title, $SubTitle, $NavTitle, $Lnk, $FLnk, $Intro, $Txt, $RefNo, $Med, $Size, $PRTSize, $SDate, $EDate, $ADate, $TAGTitle, $Dsc, $KeyW, $Original, $Limited, $Sketchbook, $Sold, $NFS, $Promo, $Activated, $PID)){
			echo'
			<div class="alert callout">
				<p><strong>ERRORS:</strong></p>
				<p>Binding parameters failed: ('.$stmt->errno.') '.$stmt->error.'</p>
				<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
			include 'pages-inc-form.php';
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
					include 'pages-inc-form.php';
				}else{
					echo'
					<div class="primary callout">
						<p><strong class="wdsgn">SUCCESS!</strong> <br class="show-for-small-only">You have amended your '.$PTT2.'. <a href="'.CMS_DIR.'page-form.php?FT=edit&amp;PID='.$NPID.'&amp;PTID='.$PTID.'" class="button">CONTINUE <span class="sb icons"></span></a><a href="'.CMS_DIR.'pages.php?PTID='.$PTID.'" title="Go back to the list for &ldquo;'.$PTTitle.'&rdquo;" class="button bgrey">BACK TO LIST <span class="rt icons"></span></a></p>
						<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
							<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					$insert_stmt->free_result();
				}
			}
		}
		echo'
		<div class="primary callout">
			<p><strong class="wdsgn">SUCCESS!</strong> You have amended '.$Title.'. <a href="'.CMS_DIR.'pages-inc-form.php?FT='.$FT.'&amp;PTID='.$PTID.'&amp;PID='.$PID.'" class="button">RELOAD FORM <span class="ord icons"></span></a><a href="'.CMS_DIR.'pages.php?PTID='.$PTID.'" title="Go back to the list for &ldquo;'.$PTTitle.'&rdquo;" class="button bgrey">BACK TO LIST <span class="rt icons"></span></a></p>
			<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
				<span aria-hidden="true">&times;</span>
			</button>
		</div>';
	}else{
		echo'
		<div class="alert callout">
			<p><strong>ERRORS:</strong></p>
			'.$error_msg.'
			<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
				<span aria-hidden="true">&times;</span>
			</button>
		</div>';
		include 'pages-inc-form.php';
	}