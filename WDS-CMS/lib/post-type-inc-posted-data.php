<?
		// Field: Post Type ID
		if(!empty($_POST['FPTID'])){
			$FPTID											= $mysqli->real_escape_string($_POST['FPTID']);
		}
		// Field: Plural
		if(!empty($_POST['FPTT1'])){
			$FPTT1											= $mysqli->real_escape_string(title_var($_POST['FPTT1']));
		}
		// Field: Singular
		if(!empty($_POST['FPTT2'])){
			$FPTT2											= $mysqli->real_escape_string(title_var($_POST['FPTT2']));
		}
		// Field: Txt
		if(!empty($_POST['FPTTxt'])){
			$FPTTxt										= textarea_var($_POST['FPTTxt']);
			$FPTTxt										= htmlspecialchars_decode($FPTTxt, ENT_COMPAT);
			$FPTTxt										= str_replace('\r\n', '', $FPTTxt);
		}
		// Field: Parent Post Type ID
		if(!empty($_POST['FParentID'])){
			$FParentID									= $mysqli->real_escape_string($_POST['FParentID']);
		}else{
			$FParentID									= '0';
		}
		if($FT == 'edit'){
			// EDIT 
			if(!$insert_stmt							= $mysqli->prepare("UPDATE PostType SET  PTT1 = ?, PTT2 = ?, PTTxt = ?, ParentID = ? WHERE PTID = ?")){
				echo'
				<div class="alert callout">
					<p><strong>ERRORS:</strong></p>
					<p>Prepare failed: ('.$mysqli->errno.') '.$mysqli->error.'</p>
					<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
						<span aria-hidden="true">&times;</span>
					</button>
				</div>';
				include 'post-type-inc-form.php';
			}else{
				if(!$insert_stmt->bind_param('sssdd', $FPTT1, $FPTT2, $FPTTxt, $FParentID, $FPTID)){
					echo'
					<div class="alert callout">
						<p><strong>ERRORS:</strong></p>
						<p>Binding parameters failed: ('.$stmt->errno.') '.$stmt->error.'</p>
						<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
							<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					include 'post-type-inc-form.php';
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
						include 'post-type-inc-form.php';
					}else{
						$insert_stmt->free_result();
					}
				}
			}
			echo'
			<div class="primary callout">
				<p><strong class="wdsgn">SUCCESS!</strong> You have amended '.$FPTT2.'. <a href="'.CMS_DIR.'post-type-form.php?FT='.$FT.'&amp;FPTID='.$FPTID.'" class="button">RELOAD FORM <span class="ord icons"></span></a><a href="'.CMS_DIR.'pages.php?PTID=1" title="Go back to the list of &ldquo;Post Types&rdquo;" class="button bgrey">BACK TO LIST <span class="rt icons"></span></a></p>
				<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
					<span aria-hidden="true">&times;</span>
				</button>
			</div>';
			}else{
				// ADD 
				if(!$insert_stmt						= $mysqli->prepare("INSERT INTO PostType (PTT1, PTT2, PTTxt, ParentID) VALUES (?, ?, ?, ?)")){
					echo "Prepare failed: (".$mysqli->errno.") ".$mysqli->error;
				}else{
					if(!$insert_stmt->bind_param('sssd', $FPTT1, $FPTT2, $FPTTxt, $FParentID)){
					echo "Binding parameters failed: (".$stmt->errno.") ".$stmt->error;
					}else{
						// Execute the prepared query
						if(!$insert_stmt->execute()){
							echo "Execute failed: (".$insert_stmt->errno.") ".$insert_stmt->error;
						}else{
							$insert_stmt->free_result();
						}
					}
				}
				echo'
				<div class="primary callout">
					<p><strong class="wdsgn">SUCCESS!</strong> <br class="show-for-small-only">You have added '.$FPTT2.' as a new Post Type. <a href="'.CMS_DIR.'pages.php?PTID=1" title="Go back to the list of &ldquo;Post Types&rdquo;" class="button bgrey">BACK TO LIST <span class="rt icons"></span></a></p>
					<button class="close-button" aria-label="Dismiss alert" type="button" data-close>
						<span aria-hidden="true">&times;</span>
					</button>
				</div>';
			}