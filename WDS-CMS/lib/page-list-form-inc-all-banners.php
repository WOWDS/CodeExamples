<?
					echo'
					<div class="columns">';
					// set directory 
					$DirImg										= BASE_DIR.'resources/banners/';
					$DirName									= '../resources/banners/';
					function validateInput($data) {
						 $data = trim($data);
						 $data = stripslashes($data);
						 $data = htmlspecialchars($data);
						 return $data;   
					}
					// open this directory 
					$DirCont										= opendir($DirName);
					// get each entry
					$FileArr											= array();
					$Fnumb										= 0;
					while($DirFile								= readdir($DirCont)) {
						$Files[]										= $DirFile;
						$FileArr[]									= strtolower($DirFile);
					}
					natsort($Files);
					// close directory
					foreach ($FileArr as $Numbs) {
						if ($Numbs != "." && $Numbs != ".." && $Numbs != "mcith" && $Numbs != ".DS_Store" && substr($Numbs, -8) != "-mid.jpg" && substr($Numbs, -8) != "-max.jpg") {
							++$Fnumb;
						}
					}
					closedir($DirCont);
					if ($Fnumb > 0) {
						$fi												= 1;
						foreach ($Files as $pathname) {
							$File										=	trim(str_replace($DirName, '', $pathname));
							$Ext										= array("-min.jpg");
							if ($File == "." || $File == ".." || $File == "mcith" || $File == ".DS_Store" || substr($File, -8) == "-mid.jpg" || substr($File, -8) == "-max.jpg") {
								//nada
							}else{
								// defaults
								$PID									= '';
								$Title									= '';
								$Lnk									= '';
								$Txt									= '';
								$Activated						= '';
								// pre-set title from filename
								$FTRaw								= str_replace('-', ' ', $File);
								$FTRaw								= str_replace('_', ' ', $FTRaw);
								$FTRaw								= str_replace('  ', ' ', $FTRaw);
								$FTRaw								= ucwords(strtolower($FTRaw));
								if (in_array(strtolower(substr($File, -8)), $Ext)) {
									$Title								= substr($FTRaw, 0, -8);
								}
								$Lnk									= substr($File, 0, -8);
								// check database
								$RQ									= $mysqli->query("SELECT PID, Title, Lnk, Txt, Activated FROM Posts WHERE PTID = '".$PTID."' AND Lnk = '".$Lnk."'");
								$RP										= $RQ->fetch_assoc();
								$PID									= $RP['PID'];
								if (!empty($RP['Title'])) {
									$Title								= $RP['Title'];
								}
								if (!empty($RP['Lnk'])) {
									$Lnk								= $RP['Lnk'];
								}
								if (!empty($RP['Txt'])) {
									$Txt								= $RP['Txt'];
								}
								$Activated						= $RP['Activated'];
						echo'
						<div class="row banrows">
							<div class="columns">
								<h3>Banner '.$fi.'</h3>
							</div>
							<div class="small-12 medium-8 columns">
								<label>Description <span data-tooltip aria-haspopup="true" class="has-tip" title="This will be used for the ALT tag, that describes the image to visually impaired people.">?</span>
									<input id="Title'.$fi.'" name="Title['.$fi.']" type="text" value="'.$Title.'">
								</label>
							</div>
							<div class="small-6 medium-2 columns">
								<div class="feat-sw">
									<h5 class="h5fltl">Activate <span class="wdsdg hide-for-medium-only">/</span> <span class="wdslg hide-for-medium-only">Hide</span></h5>
									<div class="switch bl">
										<input class="switch-input" id="Activated['.$fi.']" type="checkbox" name="Activated['.$fi.']" value="1"';if($Activated == '1'){echo' checked';}echo'>
										<label class="switch-paddle" for="Activated['.$fi.']">
											<span class="switch-active" aria-hidden="true">A</span>
											<span class="switch-inactive" aria-hidden="true"><span class="hide-for-medium-only">H</span></span>
										</label>
									</div>
								</div>
							</div>
							<div class="small-6 medium-2 columns">
								<div class="feat-sw">
									<h5 class="h5fltl"><span class="wdsp">Delete</span></h5>
									<div class="switch">
										<input class="switch-input" id="Delete['.$fi.']" type="checkbox" name="Delete['.$fi.']" value="1">
										<label class="switch-paddle" for="Delete['.$fi.']">
											<span class="switch-active" aria-hidden="true">X</span>
											<span class="switch-inactive" aria-hidden="true"></span>
										</label>
									</div>
								</div>
							</div>
							<div class="medium-6 columns">
								<label for="Txt'.$fi.'">Caption <span data-tooltip aria-haspopup="true" class="has-tip" title="30 words or fewer.">?</span></label>
									<textarea id="Txt'.$fi.'" class="tmcewc" name="Txt['.$fi.']">'.$Txt.'</textarea>
							</div>
							<div class="medium-6 columns text-right">
								<p><img src="'.$DirImg.$File.'"></p>
								<input id="Lnk'.$fi.'" name="Lnk['.$fi.']" type="hidden" value="'.$Lnk.'"><input id="PID'.$fi.'" name="PID['.$fi.']" type="hidden" value="'.$PID.'">
							</div>
						</div>
						<div class="row">
							<div class="columns">
								<hr class="HRS">
							</div>
						</div>';
							++$fi;
							}
						}
						echo'	
						<div class="row">
							<div class="columns">
								<button type="submit" class="button success" form="BanForm" alt="Submit the form" value="GoForm">SUBMIT <span class="sb icons"></span></button><input type="hidden" name="PTID" value="'.$PTID.'" />
							</div>
						</div>
					</div>';
					}