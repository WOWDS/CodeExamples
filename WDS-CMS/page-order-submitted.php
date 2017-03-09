<?
require_once 'lib/config.php';
$i												= 1;
foreach($_POST['item'] as $value){
	$mysqli->query("UPDATE Posts SET POrd = '".$i."' WHERE PID = '".$value."'");
	$i++;
}
?>