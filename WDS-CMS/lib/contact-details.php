<?
// Contact details
// FName BName Add1 Add2 Add3 City County PCode Country Lat Lng Tel Mob Fax Email URL RegNo OH FBID FBIMG
$CDQ																	= $mysqli->query("SELECT * FROM CDI");
$CDP																	= $CDQ->fetch_assoc();
$FName															= $CDP['FName'];
$BName															= $CDP['BName'];
$Add1																= $CDP['Add1'];
$Add2																= $CDP['Add2'];
$Add3																= $CDP['Add3'];
$City																	= $CDP['City'];
$County															= $CDP['County'];
$PCode																= $CDP['PCode'];
$Country															= $CDP['Country'];
$Lat																	= $CDP['Lat'];
$Lng																	= $CDP['Lng'];
$Tel																	= $CDP['Tel'];
$Mob																	= $CDP['Mob'];
$Fax																	= $CDP['Fax'];
$Email																= $CDP['Email'];
$URL																	= $CDP['URL'];
$RegNo																= $CDP['RegNo'];
$OH																	= $CDP['OH'];
$FBID																= $CDP['FBID'];
$FBAPPID														= $CDP['FBAPPID'];
$FBPage															= $CDP['FBPage'];
$FBIMG																= $CDP['FBIMG'];
$PTTxt																= $CDP['PTTxt'];