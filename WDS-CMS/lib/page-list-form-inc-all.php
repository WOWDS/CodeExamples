<?
					echo'
					<div class="medium-6 columns">
						<ul class="accordion" data-accordion data-allow-all-closed="true">
							<li class="accordion-item" data-accordion-item>
								<a href="#" class="accordion-title">Important Information</a>
								<div class="accordion-content" data-tab-content>
									'.$PTTxt.'
								</div>
							</li>
						</ul>
					</div>
					<div class="medium-6 columns">
						<p><a href="'.CMS_DIR.'page-form.php?FT=add&amp;PTID='.$PTID.'&amp;ParentID='.$ParentID.'" class="button fullw">ADD NEW <span class="ad icons"></span></a></p>
					</div>
					<div class="small-12 columns">
						<table role="grid">
							<thead>
								<tr>
									<th class="col1">Title</th>
									<th class="show-for-medium col2">Author</th>
									<th class="show-for-medium col3">Posted</th>
									<th class="col4">Active</th>
									<th class="col5">Delete</th>
								</tr>
							</thead>
							<tbody>';
								if($PNN <> 0){
									$d												= 1;
									while($PP									= $PQ->fetch_assoc()){
										if($PTID <> '1'){
											$Title									= $PP['Title'];
											if(!empty($PP['SubTitle'])){
												$Title								.= ' - '.$PP['SubTitle'];
											}
										}else{
											$Title									= $PP['NavTitle'];
										}
										if($PP['Activated'] <> 0) {
											$Active								= 'Yes';
										}else{
											$Active								= 'No';
										}
										echo '
										<tr>
											<td class="col1"><a href="'.CMS_DIR.'page-form.php?FT=edit&amp;PTID='.$PTID.'&amp;PID='.$PP['PID'].'" title="Edit &ldquo;'.$Title.'&rdquo;">'.$FeatB.'<span class="wds-bld">'.$Title.'</span> <span class="led icons"></span></a><br><em>'.$BP['BName'].'</em></td>
											<td class="show-for-medium col2">'.$PP['Author'].'</td>
											<td class="show-for-medium col3">'.$PP['PostD'].'</td>
											<td class="col4">'.$Active.'</td>
											<td class="col5">';
												if($PTID <> '2'){
												echo'
												<div class="switch tiny">
													<input type="checkbox" id="pid['.$PP['PID'].']" class="switch-input" name="pid['.$PP['PID'].']" value="'.$PP['PID'].'">
													<label class="switch-paddle" for="pid['.$PP['PID'].']">
														<span class="switch-active" aria-hidden="true">X</span>
														<span class="switch-inactive" aria-hidden="true"></span>
													</label>
												</div>';
												}
											echo'
											</td>
										</tr>';
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
					if($PTID <> '1'){
					echo'
					<div class="small-12 columns">
						<button type="submit" class="button alert" form="DelForm" value="DelForm">DELETE SELECTED <span class="dl icons"></span></button><input type="hidden" name="PTID" value="'.$PTID.'" />
					</div>';
					}