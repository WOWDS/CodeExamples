		<script>
			<? if((($FT == 'edit' && strpos($Page, 'post-type-form') === false) || ($FT <> 'banner' && strpos($Page, 'post-type-form') === false)) && strpos($Page, 'contact-details') === false){ ?>
			tinymce.init({
				selector: ".tmcea",
				theme: "modern",
				language: "en_GB",
				body_class: "gbg",
				browser_spellcheck : true,
				toolbar_items_size: 'small',
				menubar: false,
				plugins: [
					"advlist autolink lists link image charmap print hr anchor",
					"searchreplace wordcount visualblocks visualchars code",
					"insertdatetime media save table contextmenu",
					"template paste textpattern imagetools moxiemanager"
				],
				toolbar1: "newdocument | undo redo | copy paste removeformat | searchreplace | template code | bullist numlist | table | link unlink | insertfile image media",
				toolbar2: "hr | charmap | bold italic | outdent indent | alignleft alignright alignjustify | blockquote | bullist numlist | styleselect | insertdatetime",
				templates: [
					{title: '3 x 9 (image/text)', description: '3 x 9 columns, used for adding an image/text or text/image', content: '<div class="row" data-equalizer><div class="medium-3 columns" data-equalizer-watch><p>Left Column (image/text)</p></div><div class="medium-9 columns" data-equalizer-watch><p>Right Column (image/text)</p></div></div>next...'},
					{title: '4 x 8 (image/text)', description: '4 x 8 columns, used for adding an image/text or text/image', content: '<div class="row" data-equalizer><div class="medium-4 columns" data-equalizer-watch><p>Left Column (image/text)</p></div><div class="medium-8 columns" data-equalizer-watch><p>Right Column (image/text)</p></div></div>next...'},
					{title: '5 x 7 (image/text)', description: '5 x 7 columns, used for adding an image/text or text/image', content: '<div class="row" data-equalizer><div class="medium-5 columns" data-equalizer-watch><p>Left Column (image/text)</p></div><div class="medium-7 columns" data-equalizer-watch><p>Right Column (image/text)</p></div></div>next...'},
					{title: '6 x 6 (image/text)', description: '6 x 6 columns, used for adding an image/text or text/image', content: '<div class="row" data-equalizer><div class="medium-6 columns" data-equalizer-watch><p>Left Column (image/text)</p></div><div class="medium-6 columns" data-equalizer-watch><p>Right Column (image/text)</p></div></div>next...'}
				],
				min_height: 300,
				image_advtab: true,
				insertdatetime_dateformat: "%A %d %B %Y",
				insertdatetime_formats: ["%A %d %B %Y", "%d %B %Y"],
				relative_urls: false,
				remove_script_host: false,
				moxiemanager_image_settings: { 
					view: 'thumbs', 
					extensions: 'jpg,jpeg,png,gif,psd'
				},
				<? echo $MoxiePath; ?>,
				<? include 'tinymce-styles.php'; ?>
				<? include 'tinymce-fonts.php'; ?>
			});
			tinymce.init({
				selector: ".tmcesm",
				theme: "modern",
				language: "en_GB",
				body_class: "gbg",
				browser_spellcheck : true,
				toolbar_items_size: 'small',
				menubar: false,
				plugins: [
					"advlist autolink lists link image charmap hr anchor",
					"searchreplace wordcount code",
					"insertdatetime media save contextmenu",
					"template paste textpattern imagetools"
				],
				toolbar: "newdocument | undo redo | copy paste removeformat | searchreplace | code | insertdatetime | link unlink | charmap | bold italic | alignleft alignright alignjustify | styleselect | insertfile image",
				min_height: 200,
				image_advtab: true,
				insertdatetime_dateformat: "%A %d %B %Y",
				insertdatetime_formats: ["%A %d %B %Y", "%d %B %Y"],
				relative_urls: false,
				remove_script_host: false,
				<? include 'tinymce-styles.php'; ?>
				<? include 'tinymce-fonts-min.php'; ?>
			});
			tinymce.init({
				
				selector: ".tmcemicro",
				theme: "modern",
				language: "en_GB",
				body_class: "gbg",
				browser_spellcheck : true,
				toolbar_items_size: 'small',
				menubar: false,
				plugins: [
					"advlist autolink lists link image charmap print preview hr anchor",
					"searchreplace wordcount visualblocks visualchars code",
					"insertdatetime media save table contextmenu",
					"template paste textpattern imagetools"
				],
				toolbar1: "newdocument | undo redo | copy paste removeformat | searchreplace | bold italic styleselect | bullist numlist | link unlink",
				min_height: 300,
				<? include 'tinymce-styles-micro.php'; ?>
				<? include 'tinymce-fonts-min.php'; ?>
			});
			tinymce.init({
				
				selector: ".tmcecformp",
				theme: "modern",
				language: "en_GB",
				body_class: "gbg",
				browser_spellcheck : true,
				plugins: [
					"wordcount contextmenu textpattern"
				],
				menubar: false,
				toolbar: "undo redo | copy paste | bold italic",
				min_height: 150,
				<? include 'tinymce-fonts-min.php'; ?>
			});
			tinymce.init({
				
				selector: ".tmcecform",
				theme: "modern",
				language: "en_GB",
				body_class: "gbg",
				browser_spellcheck : true,
				plugins: [
					"wordcount contextmenu textpattern"
				],
				menubar: false,
				toolbar: "undo redo | copy paste | bold italic  | styleselect |",
				min_height: 150,
				forced_root_block : false,
				<? include 'tinymce-styles.php'; ?>
				<? include 'tinymce-fonts-cd-min.php'; ?>
			});
			<? } ?>
			<? if(strpos($Page, 'contact-details') !== false){ ?>
			tinymce.init({
				selector: ".tmcecd",
				theme: "modern",
				language: "en_GB",
				body_class: "gbg",
				browser_spellcheck : true,
				plugins: [
					"wordcount contextmenu textpattern"
				],
				menubar: false,
				toolbar: "undo redo | copy paste | bold italic  | styleselect |",
				min_height: 105,
				<? include 'tinymce-styles.php'; ?>
				<? include 'tinymce-fonts-cd-min.php'; ?>
			});
			<? } ?>
			<? if(strpos($Page, 'post-type-form') !== false){ ?>
			tinymce.init({
				selector: ".tmcept",
				theme: "modern",
				language: "en_GB",
				body_class: "gbg",
				browser_spellcheck : true,
				toolbar_items_size: 'small',
				menubar: false,
				plugins: [
					"advlist autolink lists link image charmap hr anchor",
					"searchreplace wordcount code",
					"insertdatetime media save contextmenu",
					"template paste textpattern"
				],
				toolbar: "newdocument | undo redo | copy paste removeformat | searchreplace | code | insertdatetime | link unlink | charmap | bold italic | alignleft alignright alignjustify | styleselect",
				min_height: 200,
				image_advtab: true,
				insertdatetime_dateformat: "%A %d %B %Y",
				insertdatetime_formats: ["%A %d %B %Y", "%d %B %Y"],
				relative_urls: false,
				remove_script_host: false,
				<? include 'tinymce-cms-styles.php'; ?>
				<? include 'tinymce-cms-fonts.php'; ?>
			});
			<? } ?>
			<? if($FT == 'edit' || $FT == 'banner'){ ?>
			tinymce.init({
				selector: ".tmcewc",
				theme: "modern",
				language: "en_GB",
				body_class: "gbg",
				browser_spellcheck : true,
				menubar: false,
				toolbar: false,
				min_height: 150,
				plugins: [
					"wordcount"
				],
				forced_root_block : false,
				<? include 'tinymce-fonts-wc-min.php'; ?>
			});
			tinymce.init({
				selector: ".tmceintro",
				theme: "modern",
				language: "en_GB",
				body_class: "gbg",
				browser_spellcheck : true,
				menubar: false,
				toolbar: false,
				min_height: 75,
				plugins: [
					"wordcount"
				],
				forced_root_block : false,
				<? include 'tinymce-fonts-wc-min.php'; ?>
			});
			<? } ?>
			</script>
		