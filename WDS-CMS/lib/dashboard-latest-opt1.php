<?
	echo'
	<h3>Paintings/Prints <span class="brush icons"></span></h3>';
	$Op1Q															= $mysqli->query("SELECT PID, PTID, Title, DATE_FORMAT(PDate, '%D %M %Y') AS PostD FROM Posts WHERE PTID = '6' ORDER BY PDate DESC LIMIT 5");
	$O1N																= $Op1Q->num_rows;
	$o1i																= 0;
	if ($O1N <> 0) {
		while($LDP												= $Op1Q->fetch_assoc()){
			$O1PID													= $LDP['PID'];
			$O1Title												= $LDP['Title'];
			$O1PTID												= $LDP['PTID'];
			$O1PD													= $LDP['PostD'];
			++$o1i;
			echo '
			<p class="smp"><a href="'.CMS_DIR.'page-form.php?FT=edit&amp;PID='.$O1PID.'&amp;PTID='.$O1PTID.'" title="Edit &ldquo;'.$O1Title.'&rdquo;"><span class="wds-bld">'.$O1Title.'</span> <span class="led icons"></span></a><br><em>'.$O1PD.'</em></p>';
			if ($O1N <> $o1i) {echo '<hr>';}
		}
	}else{
		echo '
		<p class="smp">There are no paintings at the moment.</p>';
	}