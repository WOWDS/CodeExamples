<?
					echo'
					<div class="small-12 columns">
						<div class="row">';
						include 'pages-inc-features.php';
						if($PTID == '6' || $PTID == '7'){
						include 'pages-inc-paintings.php';
						}
						echo'
						<fieldset>
						<legend>Main Content</legend>';
						include 'pages-inc-main-content.php';
						echo'
						</fieldset>';
						include 'pages-inc-tags.php';
						if($PTID == '9'){
						include 'pages-inc-dates.php';
						}
						include 'pages-inc-seo.php';
						echo'
						</div>
					</div>';