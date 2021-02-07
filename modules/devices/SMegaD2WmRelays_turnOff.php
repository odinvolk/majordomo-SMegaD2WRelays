<?php
$this->setProperty('status', 0);

$ipAddress = $this->getProperty('ipAddress');
$Password = $this->getProperty('Password');
$Port = $this->getProperty('Port');
$ch = $this->getProperty('ch');
$status = $this->getProperty('status');
$Address = $this->getProperty('bAddress');

//http://192.168.10.101/sec/?cmd=8A:0&addr=312538000000
//Выключение канала
file_get_contents("http://".$ipAddress."/".$Password."/?cmd=".$Port.$ch.":0&addr=".$Address);
