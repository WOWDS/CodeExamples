<?
		if(in_array($PTID, array(6,7))){
			$ptcol							= 'medium-6 columns end';
			$actcol							= 'medium-3 columns end';
		}else{
			$ptcol							= 'medium-6 columns end';
			$actcol							= 'medium-6 columns end';
		}
		echo'
		<fieldset>
			<legend>Page Settings</legend>
			<div class="'.$ptcol.'">
				<label>Post Type <span data-tooltip aria-haspopup="true" class="has-tip" title="The type of page it will be. Such as media, article, location etc.">?</span>
					<select id="FPTID" name="FPTID">';
					// Get post types
					if(in_array($PTFP['PTID'], array(9,10))){
					$PTFQ								= $mysqli->query("SELECT * FROM PostType WHERE ParentID = '9' AND PTID = '10' ORDER BY PTOrd ASC");
					}elseif(in_array($PTFP['PTID'], array(6,7,8))){
					$PTFQ								= $mysqli->query("SELECT * FROM PostType WHERE PTID != '6' AND PTID = '7' AND PTID = '7' ORDER BY PTOrd ASC");
					}else{
					$PTFQ								= $mysqli->query("SELECT * FROM PostType WHERE PTID != '0' AND PTID != '2' ORDER BY PTOrd ASC");
					}
					while($PTFP					= $PTFQ->fetch_assoc()){
						if($_SESSION['UTID'] <> '1' && in_array($PTFP['PTID'], array(0, 1, 2, 6, 7))){
						}else{
						echo'
						<option value="'.$PTFP['PTID'].'"';if($PTID == $PTFP['PTID']){echo' selected';}echo'>'.$PTFP['PTT2'].'</option>';
						}
					}
					echo'
					</select>
				</label>
			</div>';
			//$Original $Limited $Cards $Sold $Promo $Activated
			if($FT == 'edit'){
			echo'
			<div class="'.$actcol.'">
				<label for="Activated">Activate <span data-tooltip aria-haspopup="true" class="has-tip" title="This must be ticked to appear on the live website.">?</span></label>
				<div class="feat-sw">
					<div class="switch large">
						<input class="switch-input" id="Activated" type="checkbox" name="Activated" value="1"';if($Activated == '1'){echo' checked';}echo'>
						<label class="switch-paddle" for="Activated">
							<span class="switch-active" aria-hidden="true">&#10003;</span>
							<span class="switch-inactive" aria-hidden="true">X</span>
						</label>
					</div>
				</div>
			</div>';
			if(in_array($PTID, array(6, 7))){
			echo'
			<div class="'.$actcol.'">
				<label for="Promo">Promote <span data-tooltip aria-haspopup="true" class="has-tip" title="Tick to display this image on the home page.">?</span></label>
				<div class="feat-sw">
					<div class="switch large">
						<input class="switch-input" id="Promo" type="checkbox" name="Promo" value="1"';if($Promo == '1'){echo' checked';}echo'>
						<label class="switch-paddle" for="Promo">
							<span class="switch-active" aria-hidden="true">&#10003;</span>
							<span class="switch-inactive" aria-hidden="true">X</span>
						</label>
					</div>
				</div>
			</div>';
			}
			}
		echo'	
		</fieldset>';