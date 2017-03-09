<?
	echo'
	<hr class="HRS" aria-hidden="true">
	<h3>Links <span class="le icons"></span></h3>';
	$Op4Q																= $mysqli->query("SELECT PID, PTID, Title, DATE_FORMAT(PDate, '%D %M %Y') AS PostD FROM Posts WHERE PTID = '12' ORDER BY PDate DESC LIMIT 3");
	$O4N																	= $Op4Q->num_rows;
	$o4i																		= 0;
	if ($O4N <> 0) {
		while($LDP												= $Op4Q->fetch_assoc()){
			$O4PID													= $LDP['PID'];
			$O4Title												= $LDP['Title'];
			$O4PTID												= $LDP['PTID'];
			$O4PD													= $LDP['PostD'];
			++$o4i;
			echo '
			<p class="smp"><a href="'.CMS_DIR.'page-form.php?FT=edit&amp;PID='.$O4PID.'&amp;PTID='.$O4PTID.'" title="Edit &ldquo;'.$O4Title.'&rdquo;"><span class="wds-bld">'.$O4Title.'</span> <span class="led icons"></span></a><br><em>'.$O4PD.'</em></p>';
			if ($O4N <> $o4i) {echo '<hr>';}
		}
	}else{
		echo '
		<p class="smp">There are no news or events at the moment.</p>';
	}