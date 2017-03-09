<?
		echo'
		<div class="columns">
			<form accept-charset="UTF-8" method="POST" id="PageForm">
				<div class="row">
					<div class="columns">
						<div class="row">
							<div class="medium-8 large-6 small-centered columns">
								<h2>'.$PTT1.'</h2>
								<p><a href="'.CMS_DIR.'pages.php?PTID='.$PTID.'" title="Go back to the list for &ldquo;'.$PTT1.'&rdquo;" class="button bgrey">BACK TO LIST <span class="rt icons"></span></a></p>';
								echo'
								<ul id="sortable">';
									$OPQ							= $mysqli->query("SELECT PTID, PTT1 FROM PostType ORDER BY PTOrd");
									while($OPP				= $OPQ->fetch_assoc()){
									echo'
   								<li id="item-'.$OPP['PTID'].'">'.$OPP['PTT1'].'</li>';
									}
								echo'
								</ul>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>';