<?
// Post type
$PTQ																		= $mysqli->query("SELECT * FROM PostType WHERE PTID = '1'");
$PTP																		= $PTQ->fetch_assoc();
$PTID																	= $PTP['PTID'];
$PTT1																	= $PTP['PTT1'];
$PTT2																	= $PTP['PTT2'];