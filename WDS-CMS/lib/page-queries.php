<?
if($PTID == '1'){
	$PQ					= $mysqli->query("SELECT PID, SubTitle, NavTitle, Author, DATE_FORMAT(PDate, '%D %M %Y') AS PostD, ParentID, Activated FROM Posts WHERE PTID = '".$PTID."' ORDER BY POrd ASC");
}else{
	$PQ					= $mysqli->query("SELECT PID, Title, SubTitle, Author, DATE_FORMAT(PDate, '%D %M %Y') AS PostD, Activated FROM Posts WHERE PTID = '".$PTID."' ORDER BY Activated ASC, Title ASC");
}
$PNN						= $PQ->num_rows;