<?
		if($PTID == '1' && ($PID == '10' || $PID == '5')){
			$SUB													= 'Sub-';
			$NavF												= ' &raquo; <span class="wdsb-bld">'.$PP['NavTitle'].'</span>';
		}
		if($PTID == '11'){
			$FTTxt												= '&amp;FT=banner';
		}
		echo'
		<div class="columns">
			<form accept-charset="UTF-8" method="POST" id="PageForm">
				<div class="row">
					<div class="columns">
						<div class="row">
							<div class="medium-8 large-6 small-centered columns">
								<h2>'.$SUB.$PTT1.$NavF.'</h2>
								<p><a href="'.CMS_DIR.'pages.php?PTID='.$PTID.'" title="Go back to the list for &ldquo;'.$PTT1.'&rdquo;" class="button bgrey">BACK TO LIST <span class="rt icons"></span></a></p>';
								echo'
								<ul id="sortable">';
									if($PTID == '1' && $PID == ''){
									$OPQ							= $mysqli->query("SELECT PID, Title, NavTitle, Lnk FROM Posts WHERE PTID = '".$PTID."' AND ParentID = '0' AND Activated = '1' ORDER BY POrd");
									}elseif($PTID == '1' && $PID <> ''){
									$OPQ							= $mysqli->query("SELECT PID, Title, NavTitle, Lnk FROM Posts WHERE PTID = '".$PTID."' AND ParentID = '".$PID."' AND Activated = '1' ORDER BY POrd");
									}else{
									$OPQ							= $mysqli->query("SELECT PID, Title, NavTitle, Lnk FROM Posts WHERE PTID = '".$PTID."' AND Activated = '1' ORDER BY POrd");
									}
									while($OPP				= $OPQ->fetch_assoc()){
									if($PTID == '11'){
									echo'
   								<li id="item-'.$OPP['PID'].'"><img src="'.BASE_DIR.'resources/banners/'.$OPP['Lnk'].'-min.jpg"></li>';
									}elseif($PTID == '1'){
									echo'
   								<li id="item-'.$OPP['PID'].'">'.$OPP['NavTitle'].'</li>';
									}else{
									echo'
   								<li id="item-'.$OPP['PID'].'">'.$OPP['Title'].'</li>';
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