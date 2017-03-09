<?
	// Get CMS Links
	$CMSLQ														= $mysqli->query("SELECT * FROM CMSLinks WHERE LCode = '1'");
	$CMSLN														= $CMSLQ->num_rows;
	echo'
	<hr class="HRS" aria-hidden="true">
	<h3>Useful Links <span class="ulk icons"></span></h3>';
	$cmsli														= 0;
	while ($CMSLP										= $CMSLQ->fetch_assoc()){
		++$cmsli;
		echo'
		<h5 class="h5Lk"><a href="'.$CMSLP['URL'].'"><span id="'.$CMSLP['LID'].'" class="AI"></span>'.$CMSLP['Title'].'</a></h5>
		<p>'.$CMSLP['STitle'].'</p>';
		if ($cmsli <> $CMSLN)
		echo '
		<hr aria-hidden="true">';
	}