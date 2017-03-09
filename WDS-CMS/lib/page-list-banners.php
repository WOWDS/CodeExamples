<?
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$PTID												= $mysqli->real_escape_string($_POST['PTID']);
		// Update banners
		if (!empty($_POST['Title']) && !empty($_POST['Lnk'])) {
			$rnmb											= count($_POST['Lnk']);
		}
		for ($cnt = 1; $cnt <= $rnmb; $cnt++) {
			$PID												= $mysqli->real_escape_string($_POST['PID'][$cnt]);
			$Title												= $mysqli->real_escape_string(generic_var($_POST['Title'][$cnt]));
			$Lnk												= $mysqli->real_escape_string($_POST['Lnk'][$cnt]);
			$Txt												= $mysqli->real_escape_string(generic_var($_POST['Txt'][$cnt]));
			$Activated									= $mysqli->real_escape_string($_POST['Activated'][$cnt]);
			$Delete											= $mysqli->real_escape_string($_POST['Delete'][$cnt]);
			// delete banner
			if($Delete == '1'){
				array_map('unlink', glob("../resources/banners/".$Lnk."*"));
				$DCQ											= $mysqli->query("DELETE FROM Posts WHERE PID = '".$PID."'");
			}elseif(!empty($PID)){
			// update banner
			$RU												= $mysqli->query("UPDATE Posts SET PTID = '".$PTID."', Title = '".$Title."', Lnk = '".$Lnk."', Txt = '".$Txt."', Activated = '".$Activated."' WHERE PID = '".$PID."'");
			}else{
			// add banner
			$RU												= $mysqli->query("INSERT INTO Posts (PID, PTID, Title, Lnk, Txt, Activated) VALUES ('".$PID."', '".$PTID."', '".$Title."', '".$Lnk."', '".$Txt."', '".$Activated."')");
			}
		}
		header("location: ".CMS_DIR."/pages.php?PTID=".$PTID."");
		echo'
		<div class="columns">
			<div class="row">
				<div class="columns">
					<div class="success callout">
						<p><strong class="wdsgn">SUCCESS!</strong> You have added/amended the information for the banners. <a href="'.CMS_DIR.'pages.php?PTID='.$PTID.'&amp;FT=banner" class="button radius">RELOAD FORM <span class="ord icons"></span></a></p>
					</div>
				</div>
			</div>
		</div>';
	}else{
		include 'page-queries.php';
		include 'page-list-form-inc-banners.php';
	}