<?php

$ot = $this->object_title;
$des = $this->description;

$ipAddress = $this->getProperty('ipAddress');
$Password = $this->getProperty('Password');
$Port = $this->getProperty('Port');
$status = $this->getProperty('status');
$autoMode = $this->getProperty('autoMode');
$mqtt_st = $this->getProperty('mqtt_status');
$telegram_st = $this->getProperty('telegram_status');
$registerEvent_st = $this->getProperty('registerEvent_status');

//Добавляем трансляцию в MQTT
if ($mqtt_st == 1)
{
include_once(DIR_MODULES . 'mqtt/mqtt.class.php');
 $mqtt = new mqtt();
 $topic = "mjd/26/".$ot."/status";
 $rezult = $mqtt->mqttPublish($topic, $status, 0, 0);//function mqttPublish($topic, $value, $qos = 0, $retain = 0);
}

//Добавляем трансляцию в Telegram
if ($telegram_st == 1) 
{
include_once(DIR_MODULES . 'telegram/telegram.class.php');
$telegram_module = new telegram();
$telegram_module->sendMessageToAll($ot."-".$status, null, '', !$isImportant);
}

//Добавляем трансляцию в registerEvent
if ($registerEvent_st == 1) 
{
registerEvent($ot, array('status'=>$status,'autoMode'=>$autoMode,'description'=>$des));
}

//http://192.168.10.101/sec/?pt=8&cmd=list
$value = file_get_contents("http://".$ipAddress."/".$Password."/?pt=".$Port."&cmd=list");
$this->setProperty('stored_value', $value);
