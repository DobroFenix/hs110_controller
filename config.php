<?php
$now=time();
$plug_ip='127.0.0.1'; //ip адрес розетки
$py_file='/tmp/tplink-smartplug/tplink_smartplug.py'; //Абсолютный путь до tplink_smartplug.py

$db_type='mysql';
$db_host='localhost';
$db_user='plugs';
$db_name='plugs';
$db_pass='';



$plug_power='390'; // В Ваттах. Порог мощности, при котором розетка будет перезапущена.
$seek_time='300'; //В секундах. Интервал между проверками розетки.
?>