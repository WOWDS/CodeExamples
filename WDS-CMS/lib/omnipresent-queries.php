<?
	// Get form type (add/edit/banner)
	if(!empty($_GET['FT'])){$FT = $_GET['FT'];}else{$FT = '';}
	// Get post ID
	if(!empty($_GET['PID'])){$PID = $_GET['PID'];}else{$PID = '';}
	// Get post type ID
	if(!empty($_GET['PTID'])){$PTID = $_GET['PTID'];}else{$PTID = '';}
	// Get form post type ID
	if(!empty($_GET['FPTID'])){$FPTID = $_GET['FPTID'];}
	// Get filename
	$Page																= curPageName();
	// Get timestamp
	$Today																= date('Y-m-d H:i:s');
	// Get date
	$TDate																= date('Y-m-d');
	$Req																	= '<span class="wdsp-bld">*</span> ';
	// navigation list from post types
	$MNAVQ															= $mysqli->query("SELECT * FROM PostType ORDER BY PTOrd");
	// Check for messages
	$MSGQ																= $mysqli->query("SELECT Txt FROM Posts WHERE PTID = '2' AND Activated = '1'");
	$MSGP																= $MSGQ->fetch_assoc();
	if (!empty($MSGP['Txt'])){
		$MTxt															= 
		'<h2 id="modalTitle">MAINTENANCE</h2>
		';	
		$MTxt															.= 
		$MSGP['Txt'];	
		$MTxt															.=
		'<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
			<span aria-hidden="true">&times;</span>
		</button>
		';
	}else{
		$MTxt															= '';
	}
	// Business contact details
	$AQ																	= $mysqli->query("SELECT * FROM CDI");
	$AP																		= $AQ->fetch_assoc();
	// Contact details
	$CMSName														= $AP['Name'];
	$CMSBName													= $AP['BName'];
	$CMSBNImg													= seoURL($CMSBName);
	$CMSBLogo														= $AP['BLogo'];
	$CMSTel															= $AP['Tel'];
	$CMSMob															= $AP['Mob'];
	$CMSEmail														= $AP['Email'];
	$CMSHURL														= url_var_http($AP['URL']);
	$CMSWURL														= url_var_www($AP['URL']);
	// HTML End code
	$HTMLClose													= '
	</body>
</html>
';
?>