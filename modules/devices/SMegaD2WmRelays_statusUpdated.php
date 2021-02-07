<?php

$ipAddress = $this->getProperty('ipAddress');
$Password = $this->getProperty('Password');
$Port = $this->getProperty('Port');

//http://192.168.10.101/sec/?pt=8&cmd=list
$value = file_get_contents("http://".$ipAddress."/".$Password."/?pt=".$Port."&cmd=list");
$this->setProperty('stored_value', $value);
