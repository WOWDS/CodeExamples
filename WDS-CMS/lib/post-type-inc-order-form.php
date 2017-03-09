<?
		echo'
		<div class="columns">
			<form accept-charset="UTF-8" method="POST" id="PageForm">
				<div class="row">
					<div class="columns">
						<div class="row">
							<div class="medium-8 large-6 small-centered columns">
								<h2>'.$PTT1.'</h2>
								<p><a href="'.CMS_DIR.'pages.php?PTID=1" title="Go back to the list for &ldquo;'.$PTT1.'&rdquo;" class="button bgrey">BACK TO LIST <span class="rt icons"></span></a></p>';
								echo'
								<ul id="sortable">';
										$OPQ											= $mysqli->query("SELECT PTID, PTT1 FROM PostType WHERE ParentID = '' ORDER BY PTOrd");
										while($OPP								= $OPQ->fetch_assoc()){
											$SPRQ									= $mysqli->query("SELECT * FROM PostType WHERE ParentID = '".$OPP['PTID']."' ORDER BY PTOrd ASC");
											$SPRN									= $SPRQ->num_rows;
											if($SPRN <> 0){
											$OPTitle								= '<span class="wdsb-bld">'.$OPP['PTT1'].'</span>';
											}else{
											$OPTitle								= $OPP['PTT1'];
											}
											echo'
											<li id="item-'.$OPP['PTID'].'">'.$OPTitle.'</li>';
											while($SPP							= $SPRQ->fetch_assoc()){
												if($SPP['ParentID'] <> '0'){
													$Feat								= '<span class="featb icons"></span> ';
												}
												echo'
												<li id="item-'.$SPP['PTID'].'">'.$Feat.$SPP['PTT1'].'</li>';
											}
										}
								echo'
								</ul>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>';