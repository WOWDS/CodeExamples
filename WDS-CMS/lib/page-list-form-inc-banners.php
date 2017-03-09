<?
		echo'
		<div class="small-12 medium-8 columns">
			<ul class="accordion" data-accordion data-allow-all-closed="true">
				<li class="accordion-item" data-accordion-item>
					<a href="#" class="accordion-title">Important Information</a>
					<div class="accordion-content" data-tab-content>
						'.$PTTxt.'
					</div>
				</li>
			</ul>
		</div>
		<div class="small-12 medium-4 columns">
			<p><a href="'.CMS_DIR.'page-order.php?PTID='.$PTID.'" class="button fullw">ORDER  <span class="ord icons"></a></p>
		</div>
		<div class="small-12 columns">
			<form accept-charset="UTF-8" method="POST" id="BanForm">
				<div class="row">';
					include 'page-list-form-inc-all-banners.php';
				echo'
				</div>
			</form>
		</div>';