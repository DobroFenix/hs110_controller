<?php
include 'config.php';

$output = shell_exec('/tmp/tplink-smartplug/tplink_smartplug.py -t '.$plug_ip.' -c energy');
$output=substr($output,53);
$array=json_decode($output, true);

$u=round($array[emeter][get_realtime][voltage_mv]/1000,1);
$a=round($array[emeter][get_realtime][current_ma]/1000,1);
$p=round($array[emeter][get_realtime][power_mw]/1000,1);
$wh=round($array[emeter][get_realtime][total_wh]/1000,1);

print "U = $u В<br> A = $a A<br>P = $p Вт<br>Всего wh: $wh<br>";

//sqlite3 driver
/*
if($db_type=='sqlite3'){
	$db = new SQLite3('data/data.db');
	$db->exec("CREATE TABLE IF NOT EXISTS data (id INTEGER PRIMARY KEY, time int, u VARCHAR, a VARCHAR, p VARCHAR, wh VARCHAR)");

	//$db->exec("INSERT INTO data (path, name, message) VALUES (?, ?, ?)');)");

}
*/

?>