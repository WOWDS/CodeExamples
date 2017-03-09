		<!-- JavaScript at the bottom for fast page loading -->
		<script src="<? echo CMS_DIR; ?>js/jquery.min.js"></script>
		<script src="<? echo CMS_DIR; ?>js/what-input.min.js"></script>
		<script src="<? echo CMS_DIR; ?>js/jquery-migrate-3.0.0.min.js"></script>
		<script src="<? echo CMS_DIR; ?>js/foundation.min.js"></script>
		<script src="<? echo CMS_DIR; ?>js/easing.js"></script>
		<script src="<? echo CMS_DIR; ?>js/jquery-ui.min.js"></script>
		<script src="<? echo CMS_DIR; ?>js/jquery.ui.totop.min.js"></script>
		<script>
		<!-- load Foundation script -->
		$(document).foundation();
		</script>
		<? if($FT == 'edit' || strpos($Page, 'post-type-form') !== false || strpos($Page, 'contact-details') !== false){
		echo'
		<script src="'.CMS_DIR.'tinymce/tinymce.min.js"></script>
		';
		include 'tinymce-configs.php';
		}
		if($PTID == '9'){
		if(!empty($SDate)){
		echo'
		<script>
			$(function() {
				$( "#sdpicker" ).datepicker({
					altField: "#sdalternate",
					dateFormat: "DD, d MM yy",
					altFormat: "yy-mm-dd"
				})
				$("#sdpicker").datepicker( "setDate" , new Date(Date.parse("'.$PickS.'")));
			});
		</script>
		';
		}else{
		echo'
		<script>
			$(function() {
				$( "#sdpicker" ).datepicker({
					altField: "#sdalternate",
					dateFormat: "DD, d MM yy",
					altFormat: "yy-mm-dd"
				});
			});
		</script>
		';
		}
		if(($EDate <> '0000-00-00 00:00:00' || $EDate <> $SDate) && !empty($EDate)){
		echo'
		<script>
			$(function() {
				$( "#edpicker" ).datepicker({
					altField: "#edalternate",
					dateFormat: "DD, d MM yy",
					altFormat: "yy-mm-dd"
				})
				$("#edpicker").datepicker( "setDate" , new Date(Date.parse("'.$PickE.'")));
			});
		</script>
		';
		}else{
		echo'
		<script>
			$(function() {
				$( "#edpicker" ).datepicker({
					altField: "#edalternate",
					dateFormat: "DD, d MM yy",
					altFormat: "yy-mm-dd"
				});
			});
		</script>
		';
		}
		}
		?>
		<? if(in_array($PTID, array(3, 6, 7, 9, 11))){
		include 'tagmanager.php';
		}
		?>
		<script>
		<!-- UItoTop jQuery -->
		$(document).ready(function() {
			 $().UItoTop({
				  easingType: "easeOutQuart"
			 })
		});
		</script>
		<? if(strpos($Page, 'post-type-order') !== false){ ?>
		<script>
		$(document).ready(function () {
			$('#sortable').sortable({
				axis: 'y',
				stop: function (event, ui) {
					var data = $(this).sortable('serialize');
					$.ajax({
						data: data,
						type: 'POST',
						url: 'post-type-order-submitted.php'
					});
				}
			}).disableSelection();
		});
		</script>
		<? } ?>
