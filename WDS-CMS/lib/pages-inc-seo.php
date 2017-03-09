<?
							if(in_array($PTID, array(3, 6, 7, 9, 11))){
							echo'
							<fieldset>
								<legend>Search Engine Optimisation <span data-tooltip aria-haspopup="true" class="has-tip" title="SEO - as it also known - is the information hidden on a page that allows search engines, such as Google, to index your page efficiently. PLEASE try to fill in these fields.">?</span></legend>
								<div class="medium-12 columns">
									<label>TAG Title <span data-tooltip aria-haspopup="true" class="has-tip" title="This title is added to the tab/top of a browser window and can differ slightly to that of the main title. For instance you may want to keep the page main title (visible) shorter than this TAG title (only displayed in the tab/browser top bar). If left blank, the main title will be used.">?</span>
										<input id="TAGTitle" name="TAGTitle" type="text" value="'.$TAGTitle.'">
									</label>
								</div>
								<div class="medium-6 columns">
									<label for="Dsc">Description TAG <span data-tooltip aria-haspopup="true" class="has-tip" title="This is a short description about the page, about 300 characters/45 words, which is displayed under the link of search results.">?</span></label>
									<textarea id="Dsc" name="Dsc" class="tmcewc">'.$Dsc.'</textarea>
								</div>
								<div class="medium-6 columns">
									<label for="KeyW">Keyword TAG <span data-tooltip aria-haspopup="true" class="has-tip" title="Enter short phrases, about 300 characters/45 words - minimum of 3 words, maximum of about 8 words - which are important in the content of page. They should be separated by a comma and space (i.e &ldquo;xxxx xxxxx xxxx xxxx, xxxx xxx xxxxxxxx, xxxxxxxxxx xxxxxx xxxxx xxxxxxx&rdquo;). Although the TAG is called &ldquo;Keyword&rdquo;, DO NOT just enter single words, as you do not search by single words!">?</span></label>
									<textarea id="KeyW" name="KeyW" class="tmcewc">'.$KeyW.'</textarea>
								</div>
							</fieldset>';
							}