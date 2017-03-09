<?
					$PRQ														= $mysqli->query("SELECT * FROM PostType WHERE ParentID = '0' ORDER BY PTOrd ASC");
					$PNN														= $PRQ->num_rows;
					echo'
					<div class="medium-6 columns">
						<p><a href="'.CMS_DIR.'post-type-form.php?FT=add&amp;PTID=1" class="button fullw">ADD NEW <span class="ad icons"></span></a></p>
					</div>
					<div class="medium-6 columns">
						<p><a href="'.CMS_DIR.'post-type-order.php" class="button fullw">ORDER TYPES<span class="ord icons"></span></a></p>
					</div>
					<div class="small-12 columns">
						<table role="grid">
							<thead>
								<tr>
									<th>'.$TLN.'Title</th>
								</tr>
							</thead>
							<tbody>';
								if ($PNN <> 0) {
								$d												= 1;
								while($PP									= $PRQ->fetch_assoc()){
								$SPRQ										= $mysqli->query("SELECT * FROM PostType WHERE ParentID = '".$PP['PTID']."' ORDER BY PTOrd ASC");
								$SPNN										= $SPRQ->num_rows;
								if($SPNN <> 0){
								$OPTitle									= '<span class="wdsb-bld">'.$PP['PTT1'].'</span>';
								}else{
								$OPTitle									= '<span class="wds-bld">'.$PP['PTT1'].'</span>';
								}
								echo'
								<tr>
									<td><a href="'.CMS_DIR.'post-type-form.php?FT=edit&amp;FPTID='.$PP['PTID'].'" title="Edit &ldquo;'.$PP['PTT1'].'&rdquo;">'.$OPTitle.' <span class="led icons"></span></a></td>
								</tr>';
								while($SPP								= $SPRQ->fetch_assoc()){
								echo'
								<tr>
									<td class="SubTD"><a href="'.CMS_DIR.'post-type-form.php?FT=edit&amp;FPTID='.$SPP['PTID'].'" title="Edit &ldquo;'.$SPP['PTT1'].'&rdquo;"><span class="featb icons"></span> <span class="wds-bld">'.$SPP['PTT1'].'</span> <span class="led icons"></span></a></td>
								</tr>';
								}
								++$d;
								}
								}else{
								echo '
								<tr>
									<td colspan="3">You currently have no <span class="wdsdg-bld">&ldquo;'.$PTT1.'&rdquo;</span> listed, please add one.</td>
								</tr>';
								}
								echo'
							</tbody>
						</table>
					</div>';