<!-- JavaScript at the bottom for fast page loading -->
<script src="<? echo CMS_DIR; ?>js/tagmanager.js"></script>
<script>
jQuery(".tm-input").tagsManager({
	prefilled: <? echo $TagFill; ?>,
	blinkBGColor_1: '#D71050',
	blinkBGColor_2: '#F5F5F5',
	hiddenTagListName: 'RTags',
	hiddenTagListId: 'hiddenTagListA'
});
</script>
