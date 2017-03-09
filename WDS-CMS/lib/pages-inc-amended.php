<?
					echo'
					<div class="small-12 columns">
						<h1>Amending '.$PTT2.': <br class="show-for-small-only" aria-hidden="true"><span class="wdsdg smaller">'.$Title.'</span></h1>
						<hr class="HRD show-for-small-only" aria-hidden="true">
					</div>';
					if(strpos($Page, 'post-type-form') === false){
					echo'
					<hr class="HRD show-for-medium" aria-hidden="true">
					<div class="small-12 medium-6 columns">';
						if(!empty($AAuthor) && !empty($ADate)){
						$Amended 									= '<br>Last Amended by: <span class="wdsb-bld">'.$AAuthor.'</span> <br class="show-for-small-only" aria-hidden="true"><em class="wdsg">'.$AmD.'</em>';
						}else{
						$Amended 									= '';
						}
						echo'
						<p class="published">Posted by: <span class="wdsb-bld">'.$Author.'</span> <br class="show-for-small-only" aria-hidden="true"><em class="wdsg">'.$PostD.'</em>'.$Amended;if(!empty($FLnk)){echo'<br>Resource Location: <span class="wdsb-bld">'.$FLnk.'</span>';}echo'</p>
					</div>
					<div class="small-12 medium-6 columns">
						<a href="'.CMS_DIR.'pages.php?PTID='.$PTID.'" title="Go back to the list for &ldquo;'.$PTTitle.'&rdquo;" class="button radius bgrey">BACK TO LIST <span class="rt icons"></span></a>
					</div>';
					}