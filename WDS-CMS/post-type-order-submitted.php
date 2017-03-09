<?
require_once 'lib/config.php';
$i												= 1;
foreach($_POST['item'] as $value){
	$mysqli->query("UPDATE PostType SET PTOrd = '".$i."' WHERE PTID = '".$value."'");
	$i++;
}
?>