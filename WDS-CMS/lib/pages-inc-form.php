<?
		if($FT == 'edit'){
		include 'pages-inc-amended.php';
		}else{
		include 'pages-inc-addition.php';
		}
		echo'
		<div class="small-12 columns">
			<form accept-charset="UTF-8" method="POST" id="PageForm">
				<div class="row">';
					if($FT == 'add'){
					include 'pages-inc-add.php';
					} elseif($PTID <> '1' && $FT == 'edit'){
					include 'pages-inc-edit.php';
					}
					echo'
					<div class="small-12 columns">
						<button type="submit" class="button success" form="PageForm" alt="Submit the form" value="GoForm">SUBMIT <span class="sb icons"></span></button><input type="hidden" name="FT" value="'.$FT.'"><input type="hidden" name="PTID" value="'.$PTID.'"><input type="hidden" name="FLnk" value="'.$FLnk.'"><a href="'.CMS_DIR.'pages.php?PTID='.$PTID.'" class="button bgrey">BACK TO LIST <span class="rt icons"></span></a>
					</div>
				</div>
			</form>
		</div>';