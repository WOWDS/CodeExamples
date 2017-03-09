<?
// Post type
$PTQ																	= $mysqli->query("SELECT * FROM PostType WHERE PTID = '".$PTID."'");
$PTP																	= $PTQ->fetch_assoc();
$PTID																= $PTP['PTID'];
$PTT1																= $PTP['PTT1'];
$PTT2																= $PTP['PTT2'];
$PTTxt																= $PTP['PTTxt'];
$ParentID														= $PTP['ParentID'];
if($ParentID <> '0'){
	$H1Q																= $mysqli->query("SELECT PTT1 FROM PostType WHERE PTID = '".$ParentID."'");
	$H1P																= $H1Q->fetch_assoc();
	$h1t																= $H1P{'PTT1'}.' &ndash; '.$PTT1;
}else{
	$h1t																= $PTT1;
}