<?
					echo'
					<div class="small-12 columns">
						<div class="row">
						<fieldset>
						<legend>Post Type Information</legend>
							<div class="medium-6 columns">
								<label>Contacts Name <span data-tooltip aria-haspopup="true" class="has-tip" title="If a sole trader and not a business.">?</span>
									<input id="FName" name="FName" type="text" value="'.$FName.'" placeholder="Can be left blank">
								</label>
							</div>
							<div class="medium-6 columns">
								<label>Business Name <span data-tooltip aria-haspopup="true" class="has-tip" title="Full business name - if not listed as a sole trader.">?</span>
									<input id="BName" name="BName" type="text" value="'.$BName.'" placeholder="Can be left blank">
								</label>
							</div>
							<div class="medium-6 columns">
								<label>Address Line 1
									<input id="Add1" name="Add1" type="text" value="'.$Add1.'" placeholder="Can be left blank">
								</label>
							</div>
							<div class="medium-6 columns">
								<label>Address Line 2
									<input id="Add2" name="Add2" type="text" value="'.$Add2.'" placeholder="Can be left blank">
								</label>
							</div>
							<div class="medium-6 columns">
								<label>Address Line 3
									<input id="Add3" name="Add3" type="text" value="'.$Add3.'" placeholder="Can be left blank">
								</label>
							</div>
							<div class="medium-6 columns">
								<label>City
									<input id="City" name="City" type="text" value="'.$City.'" placeholder="Can be left blank">
								</label>
							</div>
							<div class="medium-6 columns">
								<label>County
									<input id="County" name="County" type="text" value="'.$County.'" placeholder="Can be left blank">
								</label>
							</div>
							<div class="medium-6 columns">
								<label>Country
									<input id="Country" name="Country" type="text" value="'.$Country.'" placeholder="Can be left blank">
								</label>
							</div>
							<div class="medium-4 columns">
								<label>Postcode <span data-tooltip aria-haspopup="true" class="has-tip" title="In capitals with a spcae, such as XXX XXX, XXXX XXX or XX XXX.">?</span>
									<input id="PCode" name="PCode" type="text" value="'.$PCode.'" placeholder="Can be left blank">
								</label>
							</div>
							<div class="medium-4 columns">
								<label>Latitude <span data-tooltip aria-haspopup="true" class="has-tip" title="See the information section above to find your latitude co-ordinates.">?</span>
									<input id="Lat" name="Lat" type="text" value="'.$Lat.'">
								</label>
							</div>
							<div class="medium-4 columns">
								<label>Longitude <span data-tooltip aria-haspopup="true" class="has-tip" title="See the information section above to find your longitude co-ordinates.">?</span>
									<input id="Lng" name="Lng" type="text" value="'.$Lng.'">
								</label>
							</div>
							<div class="medium-4 columns">
								<label>Telephone
									<input id="Tel" name="Tel" type="text" value="'.$Tel.'" placeholder="Can be left blank">
								</label>
							</div>
							<div class="medium-4 columns">
								<label>Mobile
									<input id="Mob" name="Mob" type="text" value="'.$Mob.'" placeholder="Can be left blank">
								</label>
							</div>
							<div class="medium-4 columns">
								<label>Fax
									<input id="Fax" name="Fax" type="text" value="'.$Fax.'" placeholder="Can be left blank">
								</label>
							</div>
							<div class="medium-6 columns">
								<label>Email <span data-tooltip aria-haspopup="true" class="has-tip" title="Main contact email address to be displayed on the website.">?</span>
									<input id="Email" name="Email" type="text" value="'.$Email.'" placeholder="Can be left blank">
								</label>
							</div>
							<div class="medium-6 columns">
								<label>Website Address
									<input id="URL" name="URL" type="text" value="'.$URL.'">
								</label>
							</div>
							<div class="medium-6 columns">
								<label for="RegNo">Registered Number <span data-tooltip aria-haspopup="true" class="has-tip" title="This is for limited or charity businesses. Example &ldquo;Registered Charity No. 245132&rdquo;.">?</span></label>
								<textarea id="RegNo" name="RegNo" class="tmcecd" placeholder="Can be left blank">'.$RegNo.'</textarea>
							</div>
							<div class="medium-6 columns">
								<label for="OH">Opening Hours <span data-tooltip aria-haspopup="true" class="has-tip" title="Opening hours. Example &ldquo;Opening Hours: Monday-Saturday: 8am to 5pm | Sunday: 11am to 3pm&rdquo;.">?</span></label>
								<textarea id="OH" name="OH" class="tmcecd" placeholder="Can be left blank">'.$OH.'</textarea>
							</div>';
							if($_SESSION['UTID'] == '1'){
							echo'
							<div class="medium-6 columns">
								<label>Facebook ID <span data-tooltip aria-haspopup="true" class="has-tip" title="See the information section above - this is usually added by WDS and is the ID number of one of the admins for the businesses Facebook page.">?</span>
									<input id="FBID" name="FBID" type="text" value="'.$FBID.'" placeholder="Can be left blank">
								</label>
							</div>
							<div class="medium-6 columns">
								<label>Facebook App ID <span data-tooltip aria-haspopup="true" class="has-tip" title="Used for adding SDK functions to the website, such as displaying Facebook posts on the website.">?</span>
									<input id="FBAPPID" name="FBAPPID" type="text" value="'.$FBAPPID.'" placeholder="Can be left blank">
								</label>
							</div>
							<div class="medium-6 columns">
								<label>Facebook Link <span data-tooltip aria-haspopup="true" class="has-tip" title="The page name or number, excluding https://www.facebook.com/.">?</span>
									<input id="FBPage" name="FBPage" type="text" value="'.$FBPage.'" placeholder="Can be left blank">
								</label>
							</div>
							<div class="medium-6 columns">
								<label>Facebook Image <span data-tooltip aria-haspopup="true" class="has-tip" title="A link to the image you wish to be displayed when users share a page - usually a logo and added by WDS.">?</span>
									<input id="FBIMG" name="FBIMG" type="text" value="'.$FBIMG.'" placeholder="Can be left blank">
								</label>
							</div>';
							}
						echo'	
						</fieldset>
						</div>
					</div>';