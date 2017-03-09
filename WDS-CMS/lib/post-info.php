<?
// Post information
$PQ										= $mysqli->query("SELECT *, DATE_FORMAT(PDate, '%D %b %Y (%H:%i)') AS PostD, DATE_FORMAT(ADate, '%D %b %Y - %H:%i') AS AmD, DATE_FORMAT(SDate, '%Y-%m-%d') AS PickS, DATE_FORMAT(EDate, '%Y-%m-%d') AS PickE FROM Posts WHERE PID = '".$PID."'");
$PP											= $PQ->fetch_assoc();
$PostD									= $PP['PostD'];
$Author								= $PP['Author'];
$AAuthor								= $PP['AAuthor'];
$ADate									= $PP['ADate'];
$AmD									= $PP['AmD'];