<?

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$error_msg													= '';
		if($FT == 'edit'){
		include 'pages-inc-posted-edit-data.php';
		}else{
		include 'pages-inc-posted-add-data.php';
		}
		// Set moxiemanager path
		$MoxiePath													= 'moxiemanager_path: \'/public_html/'.$FLnk.'\'';
		//include 'display-results.php';
	}else{
		$ParentID													= $PP['ParentID'];
		$Title																= $PP['Title'];
		$SubTitle														= $PP['SubTitle'];
		$NavTitle														= $PP['NavTitle'];
		$Lnk																= $PP['Lnk'];
		$PImg															= $PP['PImg'];
		$FLnk															= $PP['FLnk'];
		$FName														= $_SESSION['user_name'];
		$Intro															= $PP['Intro'];
		$Txt																= $PP['Txt'];
		$Med																= $PP['Med'];
		$Size																= $PP['Size'];
		$PRTSize														= $PP['PRTSize'];
		$RefNo															= $PP['RefNo'];
		$SDate															= $PP['SDate'];
		$PickS															= $PP['PickS'];
		$EDate															= $PP['EDate'];
		$PickE															= $PP['PickE'];
		$PDate															= $PP['PDate'];
		$PostD															= $PP['PostD'];
		$Author														= $PP['Author'];
		$ADate															= $PP['ADate'];
		$AmD															= $PP['AmD'];
		$TAGTitle														= $PP['TAGTitle'];
		$Dsc																= $PP['Dsc'];
		$KeyW															= $PP['KeyW'];
		$POrd															= $PP['POrd'];
		$Original														= $PP['Original'];
		$Limited														= $PP['Limited'];
		$Sold																= $PP['Sold'];
		$NFS																= $PP['NFS'];
		$Promo															= $PP['Promo'];
		$Activated													= $PP['Activated'];
		// Set moxiemanager path
		$MoxiePath													= 'moxiemanager_path: \'/public_html/'.$FLnk.'\'';
		include 'pages-inc-form.php';
		//include 'display-results.php';
	}