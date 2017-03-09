<?
		echo'
		<div class="columns">
			<form accept-charset="UTF-8" method="POST" id="DelForm">
				<div class="row">';
					if($PTID == '1'){
					include 'post-type-list-form-inc-all.php';
					}else{
					include 'page-list-form-inc-all.php';
					}
				echo'
				</div>
			</form>
		</div>';