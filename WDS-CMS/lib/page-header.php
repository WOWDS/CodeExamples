<?
		echo'
		<div class="row" id="HD">
			<div  class="small-12 medium-6 columns">
				<p id="cms-hd">Client Name CMS</p>
			</div>';
			if(!empty($_SESSION['user_name'])){
			echo'
			<div id="log" class="small-12 medium-6 columns">
				<p><strong class="wdsp">'. htmlspecialchars($_SESSION['user_name']).'</strong>';if($_SESSION['LastLog'] <> '0000-00-00 00:00:00'){echo' <span class="wdsg">&raquo; <em>'.htmlentities($_SESSION['LastLog']).'</em></span>';}else{ echo' <span class="wdsg">&raquo; <em>First Login</em></span>';}echo' <span class="lck icons"></span></p>
			</div>';
			}
		echo'
		</div>';