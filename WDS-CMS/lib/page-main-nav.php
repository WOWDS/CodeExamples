<?
		echo'
		<div id="top-bar-wrap" data-sticky-container>
			<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
				<button class="menu-icon" type="button" data-toggle></button>
				<div class="title-bar-title">Menu</div>
			</div>
			<div id="main-menu" data-sticky data-options="marginTop:0;" data-anchor="wrap">
				<div class="top-bar">
					<div class="top-bar-left">
						<ul class="menu">
							<li><a href="'.CMS_DIR.'dashboard.php" class="home">Dashboard</a></li>
						</ul>
					</div>
					<div class="top-bar-right">
						<ul class="dropdown menu" data-responsive-menu="drilldown medium-dropdown">
							<li><a tabindex="4" title="Main website pages">Site Content</a>
								<ul class="vertical menu CntMenu">';
									// navigation list from post types
									$MNAVQ							= $mysqli->query("SELECT * FROM PostType WHERE ParentID = '0' ORDER BY PTOrd ASC");
									// if not empty...
									if(mysqli_num_rows($MNAVQ) <> ''){
									// loop results...
									while($MNAVP				= $MNAVQ->fetch_assoc()){
									// check for sub-menu...
									$SSNAVQ						= $mysqli->query("SELECT * FROM PostType WHERE ParentID = '".$MNAVP['PTID']."' ORDER BY PTOrd ASC");
									if(mysqli_num_rows($SSNAVQ) <> ''){
									echo'
									<li><a href="'.CMS_DIR.'pages.php?PTID='.$MNAVP['PTID'].'">'.$MNAVP['PTT1'].'</a>';
										echo'
										<ul class="vertical menu CntMenu">';
											while($SSNAVP		= $SSNAVQ->fetch_assoc()){
											echo'
											<li><a href="'.CMS_DIR.'pages.php?PTID='.$SSNAVP['PTID'].'">'.$SSNAVP['PTT1'].'</a></li>';
											}
										echo'
										</ul>
									</li>';
									}else{
									if(in_array($MNAVP['PTID'], array(1, 2, 4)) && $_SESSION['UTID'] <> '1'){
									//NADA
									}else{
									echo'
									<li><a href="'.CMS_DIR.'pages.php?PTID='.$MNAVP['PTID'].'">'.$MNAVP['PTT1'].'</a></li>';
									}
									}
									}
								echo'
								</ul>';
								}
							echo'
							</li>
							<li><a href="'.CMS_DIR.'tinymce/plugins/moxiemanager/">Resources</a></li>
							<li class="lastli"><a tabindex="35" title="View your account details">My Account</a>
								<ul class="vertical menu">
									<li><a href="'.CMS_DIR.'user-edit.php">Edit My Profile <span class="ed icons"></span></a></li>
									<li><a href="'.LOG_DIR.'?logout"><strong>Sign Out</strong> <span class="ulck icons"></span></a></li>
									<li><a href="'.CMS_DIR.'contact-details.php">Contact Details</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>';