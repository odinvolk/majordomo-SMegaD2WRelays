<?php
$ot = $this->object_title;
$blocked_timeout = $ot.'_lightOffTimer';
$timeout = $this->getProperty('timeout'); //60 * 15; 15 мин timeout
$ipAddress = $this->getProperty('ipAddress');
$Password = $this->getProperty('Password');
$Port = $this->getProperty('Port');
$ch = $this->getProperty('ch');
$status = $this->getProperty('status');
$Address = $this->getProperty('bAddress');

//Добавляем таймер на автовыключение света
    clearTimeOut($blocked_timeout);
    setTimeOut($blocked_timeout,'cm("'.$ot.'.turnOff");',60 * $timeout);
    $this->setProperty('status', 1);

//http://192.168.10.101/sec/?cmd=8A:0&addr=312538000000
//Включение канала
file_get_contents("http://".$ipAddress."/".$Password."/?cmd=".$Port.$ch.":1&addr=".$Address);
