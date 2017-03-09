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
					include 'post-type-inc-fields.php';
					echo'
					<div class="small-12 columns">
						<button type="submit" class="button success" form="PageForm" alt="Submit the form" value="GoForm">SUBMIT <span class="sb icons"></span></button><input type="hidden" name="FT" value="'.$FT.'"><input type="hidden" name="FPTID" value="'.$FPTID.'"><input type="hidden" name="PTID" value="'.$PTID.'"><a href="'.CMS_DIR.'pages.php?PTID='.$PTID.'" class="button bgrey">BACK TO LIST <span class="rt icons"></span></a>
					</div>
				</div>
			</form>
		</div>';