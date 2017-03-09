<?
	// Field: FT - Form type (add/edit)
	if(!empty($_POST['FT'])){
		$FT													= $mysqli->real_escape_string($_POST['FT']);
	}
	// Field: CMS PTID - Post Type ID
	if(!empty($_POST['PTID'])){
		$PTID											= $mysqli->real_escape_string($_POST['PTID']);
	}
	// Field: Form PTID - Post Type ID
	if(!empty($_POST['FPTID'])){
		$FPTID												= $mysqli->real_escape_string($_POST['FPTID']);
	}else{
		$FPTID												= '0';
	}
 	// Field: Title
	if(!empty($_POST['Title'])){
		$Title													= $mysqli->real_escape_string(title_var($_POST['Title']));
	}else{
		$error_msg										.= '<p>You must enter a title.</p>';
	}
	$NAVTitle												= $mysqli->real_escape_string($_POST['Title']);
	if(in_array($PTID, array(3, 6, 7, 9, 11))){
		// Field: Lnk - URL of the Post
		$Lnk													= $mysqli->real_escape_string(seoURL($_POST['Title']));
	}else{
		$Lnk													= NULL;
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
	// Field: TAGTitle - SEO Title TAG
	$TAGTitle												= $mysqli->real_escape_string(title_var($_POST['Title']));
	// Field: Dsc - SEO Description TAG
	$Dsc														= $mysqli->real_escape_string(seoD($_POST['Title']));
	// Field: KeyW - SEO Keywords TAG
	$KeyW													= $mysqli->real_escape_string(seoK($_POST['Title']));
	// Field: ParentID - What page to link this page to
	if(!empty($_POST['ParentID'])){
		$ParentID										= $mysqli->real_escape_string($_POST['ParentID']);
	}else{
		$ParentID										= '0';
	}
	// Field: Posted Date & Author
	$PDate													= $Today;
	$Author												= $_SESSION['user_name'];
	if(empty($error_msg)){
		// ADD 
		if(!$insert_stmt					= $mysqli->prepare("INSERT INTO Posts (PTID, Title, NAVTitle, PDate, Lnk, FLnk, TAGTitle, Dsc, KeyW, Author, ParentID) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")){
			echo'
			<div class="alert callout">
				<p><strong>ERRORS:</strong></p>
				<p>Prepare failed: ('.$mysqli->errno.') '.$mysqli->error.'</p>
				<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
			include 'pages-inc-add-form.php';
		}else{
			if(!$insert_stmt->bind_param('isssssssssi', $FPTID, $Title, $NAVTitle, $PDate, $Lnk, $FLnk, $TAGTitle, $Dsc, $KeyW, $Author, $ParentID)){
			echo'
			<div class="alert callout">
				<p><strong>ERRORS:</strong></p>
				<p>Binding parameters failed: ('.$stmt->errno.') '.$stmt->error.'</p>
				<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
			include 'pages-inc-add-form.php';
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
					include 'pages-inc-add-form.php';
				}else{
					// Get post ID
					$PIDQ									= $mysqli->query("SELECT PID FROM Posts WHERE Title = '".$Title."' ORDER BY PID DESC LIMIT 1");
					$PIDP									= $PIDQ->fetch_assoc();
					$NPID									= $PIDP['PID'];
					echo'
					<div class="primary callout">
						<p><strong class="wdsgn">SUCCESS!</strong> <br class="show-for-small-only">You have added your '.$PTT2.'. <a href="'.CMS_DIR.'page-form.php?FT=edit&amp;PID='.$NPID.'&amp;PTID='.$PTID.'" class="button">CONTINUE <span class="sb icons"></span></a><a href="'.CMS_DIR.'pages.php?PTID='.$PTID.'" title="Go back to the list for &ldquo;'.$PTTitle.'&rdquo;" class="button bgrey">BACK TO LIST <span class="rt icons"></span></a></p>
						<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
							<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					$insert_stmt->free_result();
				}
			}
		}
	}else{
		echo'
		<div class="alert callout">
			<p><strong>ERRORS:</strong></p>
			'.$error_msg.'
			<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
				<span aria-hidden="true">&times;</span>
			</button>
		</div>';
		include 'pages-inc-add-form.php';
	}