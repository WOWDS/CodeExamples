<?
		if($PTID == '6'){
			$leg								= 'Painting/Print Settings';
			$imgcol							= 'medium-6 ';
		}else{
			$leg								= 'Sketchbook Image';
			$imgcol							= '';
		}
		echo'
		<fieldset>
			<legend>'.$leg.'</legend>';
			if($PTID == '6'){
			echo'
			<div class="medium-6 large-3 columns">
				<label for="Original">Original</label>
				<div class="feat-sw">
					<div class="switch large">
						<input class="switch-input" id="Original" type="checkbox" name="Original" value="1"';if($Original == '1'){echo' checked';}echo'>
						<label class="switch-paddle" for="Original">
							<span class="switch-active" aria-hidden="true">&#10003;</span>
							<span class="switch-inactive" aria-hidden="true">X</span>
						</label>
					</div>
				</div>
			</div>
			<div class="medium-6 large-3 columns">
				<label for="Sold">Sold</label>
				<div class="feat-sw">
					<div class="switch large">
						<input class="switch-input" id="Sold" type="checkbox" name="Sold" value="1"';if($Sold == '1'){echo' checked';}echo'>
						<label class="switch-paddle" for="Sold">
							<span class="switch-active" aria-hidden="true">&#10003;</span>
							<span class="switch-inactive" aria-hidden="true">X</span>
						</label>
					</div>
				</div>
			</div>
			<div class="medium-6 large-3 columns">
				<label for="Limited">Limited</label>
				<div class="feat-sw">
					<div class="switch large">
						<input class="switch-input" id="Limited" type="checkbox" name="Limited" value="1"';if($Limited == '1'){echo' checked';}echo'>
						<label class="switch-paddle" for="Limited">
							<span class="switch-active" aria-hidden="true">&#10003;</span>
							<span class="switch-inactive" aria-hidden="true">X</span>
						</label>
					</div>
				</div>
			</div>
			<div class="medium-6 large-3 columns">
				<label for="NFS">Not For Sale</label>
				<div class="feat-sw">
					<div class="switch large">
						<input class="switch-input" id="NFS" type="checkbox" name="NFS" value="1"';if($NFS == '1'){echo' checked';}echo'>
						<label class="switch-paddle" for="NFS">
							<span class="switch-active" aria-hidden="true">&#10003;</span>
							<span class="switch-inactive" aria-hidden="true">X</span>
						</label>
					</div>
				</div>
			</div>
			<div class="columns">
				<hr class="HRSL">
			</div>';
			}
			echo'
			<div class="'.$imgcol.'columns">
				<label class="text-center">';if($PTID == '6'){echo'Current Image<br>';}
					if(file_exists('../'.$FLnk.'/'.$Lnk.'-sm.jpg')){
					echo'
					<img src="'.BASE_DIR.$FLnk.'/'.$Lnk.'-sm.jpg" class="ImgThb">';
					}else{
					echo '<p class="wdsp" style="font-weight:400"><em>There is currently no image assigned to this gallery item.</em></p>';
					}
				echo'
				</label>
			</div>';
			if($PTID == '6'){
			echo'
			<div class="medium-6 columns">
				<div class="row">
					<div class="columns">
						<label>Reference Number <span data-tooltip aria-haspopup="true" class="has-tip" title="Unique reference number for the painting/print.">?</span>
							<input id="RefNo" name="RefNo" type="text" value="'.$RefNo.'">
						</label>
					</div>
					<div class="columns">
						<label>Medium <span data-tooltip aria-haspopup="true" class="has-tip" title="Medium used to produce the painting/print.">?</span>
							<input id="Med" name="Med" type="text" value="'.$Med.'">
						</label>
					</div>
					<div class="columns">
						<label>Painting Size <span data-tooltip aria-haspopup="true" class="has-tip" title="Please enter the size of the painting as (height)mm x (width)mm, i.e. 700mm x 460mm.">?</span>
							<input id="Size" name="Size" type="text" value="'.$Size.'">
						</label>
					</div>
					<div class="columns">
						<label>Print Size <span data-tooltip aria-haspopup="true" class="has-tip" title="Please enter the size of the print as (height)mm x (width)mm, i.e. 700mm x 460mm.">?</span>
							<input id="PRTSize" name="PRTSize" type="text" value="'.$PRTSize.'">
						</label>
					</div>
				</div>
			</div>';
			}
		echo'
		</fieldset>';