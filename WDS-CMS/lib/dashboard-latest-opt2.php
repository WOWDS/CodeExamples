<?
	echo'
	<hr class="HRS" aria-hidden="true">
	<h3>Sketchbooks <span class="pen icons"></span></h3>';
	$Op2Q															= $mysqli->query("SELECT PID, PTID, Title, DATE_FORMAT(PDate, '%D %M %Y') AS PostD FROM Posts WHERE PTID = '7' AND Activated = '1' ORDER BY PDate DESC LIMIT 5");
	$O2N																= $Op2Q->num_rows;
	$o2i																= 0;
	if ($O2N <> 0) {
		while($LDP												= $Op2Q->fetch_assoc()){
			$O2PID													= $LDP['PID'];
			$O2Title												= $LDP['Title'];
			$O2PTID												= $LDP['PTID'];
			$O2PD													= $LDP['PostD'];
			++$o2i;
			echo '
			<p class="smp"><a href="'.CMS_DIR.'page-form.php?FT=edit&amp;PID='.$O2PID.'&amp;PTID='.$O2PTID.'" title="Edit &ldquo;'.$O2Title.'&rdquo;"><span class="wds-bld">'.$O2Title.'</span> <span class="led icons"></span></a><br><em>'.$O2PD.'</em></p>';
			if ($O2N <> $o2i) {echo '<hr>';}
		}
	}else{
		echo '
		<p class="smp">There are no sketchbooks at the moment.</p>';
	}