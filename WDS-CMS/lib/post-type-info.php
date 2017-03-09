<?
// Post information
$PQ																		= $mysqli->query("SELECT * FROM PostType WHERE PTID = '".$FPTID."'");
$PP																			= $PQ->fetch_assoc();
$FPTT1																	= $PP['PTT1'];
$FPTT2																	= $PP['PTT2'];
$FPTTxt																= $PP['PTTxt'];
$FParentID															= $PP['ParentID'];