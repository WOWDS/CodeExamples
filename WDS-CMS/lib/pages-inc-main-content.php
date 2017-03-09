<?
								if(!in_array($PTID, array(10, 12))){
									$colsize						= 'medium-6 ';
								}
								if($PTID == '10'){
									$tg								= 'Gallery ';
									$subt							= 'Address <span data-tooltip aria-haspopup="true" class="has-tip" title="Enter the address for the gallery.">?</span>';
								}else{
									$subt							= 'Sub-title <span data-tooltip aria-haspopup="true" class="has-tip" title="Can be left blank.">?</span>';
								}
								
								if(in_array($PTID, array(6, 7))){
									$plnk							= 'This is the link to your gallery page and also the image filename. ALWAYS end with a number (&ldquo;name-name-1&rdquo;) incase you add an additional item by the same name, that you can then call &ldquo;name-name-2&rdquo;. ONLY letters, hyphens &amp; numbers. DO NOT use a number or hyphen at the start of the permalink.';
									$intt							= 'Image Text <span data-tooltip aria-haspopup="true" class="has-tip" title="A single paragraph/sentence about the painting/print/sketchbook.">?</span>';
								}else{
									$plnk							= 'External link to a website. Start with www. and not http://.
';
									$intt							= 'Introduction Text <span data-tooltip aria-haspopup="true" class="has-tip" title="This is the introduction text and should be one sentence/paragraph with no line returns.">?</span>';
								}
								echo'
								<div class="'.$colsize.'columns end">
									<label>'.$tg.'Title '.$Req.'
										<input id="Title" name="Title" type="text" value="'.$Title.'">
									</label>
								</div>';
								if(!in_array($PTID, array(12))){
								echo'
								<div class="'.$colsize.'columns end">
									<label>'.$subt.'
										<input id="SubTitle" name="SubTitle" type="text" value="'.$SubTitle.'">
									</label>
								</div>';
								}
								if($PTID == '3'){
								echo'
								<div class="'.$colsize.'columns">
									<label>Navigation Title '.$Req.' <span data-tooltip aria-haspopup="true" class="has-tip" title="This can be a short name for your page that appears in the navigation.">?</span>
										<input id="NavTitle" name="NavTitle" type="text" value="'.$NavTitle.'">
									</label>
								</div>';
								}
								if($PTID <> '10'){
								echo'
								<div class="';if($PTID == '3'){echo $colsize;}echo' columns end">
									<label>Permalink <span data-tooltip aria-haspopup="true" class="has-tip" title="'.$plnk.'">?</span>
										<input id="Lnk" name="Lnk" type="text" value="'.$Lnk.'">
									</label>
								</div>';
								}
								if(!in_array($PTID, array(10, 12))){
								echo'
								<div class="columns">
									<label for="Intro">'.$intt.'</label>
									<textarea id="Intro" name="Intro" class="tmcecform">'.$Intro.'</textarea>
								</div>';
								}
								if(in_array($PTID, array(3, 9))){
								echo'
								<div class="columns">
									<label for="Txt">Main Text <span data-tooltip aria-haspopup="true" class="has-tip" title="This is the main content for your pages.">?</span></label>
									<textarea id="Txt" name="Txt" class="tmcea">'.$Txt.'</textarea>
								</div>';
								}