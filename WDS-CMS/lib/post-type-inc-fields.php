<?
					echo'
					<div class="small-12 columns">
						<div class="row">
						<fieldset>
						<legend>Post Type Information</legend>
							<div class="medium-4 columns">
								<label>Parent Post Type <span data-tooltip aria-haspopup="true" class="has-tip" title="Select a parent page if a sub menu of one.">?</span>
									<select id="FParentID" name="FParentID">
										<option value="0"';if($FParentID == '0'){echo' selected';}echo'>Can be left blank...</option>';
									// Get post type
									$PTFQ								= $mysqli->query("SELECT PTID, PTT1 FROM PostType WHERE ParentID = '0' AND PTID != '1' AND PTID != '2' AND PTID != '3' AND PTID != '".$FPTID."' ORDER BY PTT2 ASC");
									while($PTFP					= $PTFQ->fetch_assoc()){
										echo'
										<option value="'.$PTFP['PTID'].'"';if($FParentID == $PTFP['PTID']){echo' selected';}echo'>'.$PTFP['PTT1'].'</option>';
									}
									echo'
									</select>
								</label>
							</div>
							<div class="medium-4 columns">
								<label>Plural
									<input id="FPTT1" name="FPTT1" type="text" value="'.$FPTT1.'">
								</label>
							</div>
							<div class="medium-4 columns">
								<label>Singular
									<input id="FPTT2" name="FPTT2" type="text" value="'.$FPTT2.'">
								</label>
							</div>
							<div class="columns">
								<label for="FPTTxt">Information Text</label>
								<textarea id="FPTTxt" name="FPTTxt" class="tmcept">'.$FPTTxt.'</textarea>
							</div>
						</fieldset>
						</div>
					</div>';