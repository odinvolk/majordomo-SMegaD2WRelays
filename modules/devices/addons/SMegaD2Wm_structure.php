<?php
 
$this->device_types['megad2wm_relay'] = array(
        'TITLE'=>'Реле MegaD2Wm',
        'PARENT_CLASS'=>'SControllers',
        'CLASS'=>'SMegaD2WmRelays',
        'DESCRIPTION'=>'Реле 2W',
        'PROPERTIES'=>array(
            'ipAddress'=>array('DESCRIPTION'=>'IP адрес MegaD устройства', '_CONFIG_TYPE'=>'text', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'Password'=>array('DESCRIPTION'=>'Пароль MegaD устройства', '_CONFIG_TYPE'=>'text', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'Port'=>array('DESCRIPTION'=>'Порт MegaD устройства', '_CONFIG_TYPE'=>'text', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'bAddress'=>array('DESCRIPTION'=>'Адрес MegaD2W устройства', '_CONFIG_TYPE'=>'text', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'ch'=>array('DESCRIPTION'=>'Канал MegaD2W устройства', '_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'A=A,B=B'),
            'status'=>array('DESCRIPTION'=>'Состояние канал MegaD2W','ONCHANGE'=>'statusUpdated', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'timeout'=>array('DESCRIPTION'=>'Время отключения канала (мин.)', '_CONFIG_TYPE'=>'text', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'stored_value'=>array('DESCRIPTION'=>'История канала', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'autoMode'=>array('DESCRIPTION'=>'Авто отключение канала','_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdautoMode'),
        ),
        'METHODS'=>array(
            'turnOn'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_ON,'_CONFIG_SHOW'=>1),
            'turnOnAuto'=>array('DESCRIPTION'=>'Включить на время','_CONFIG_SHOW'=>1),
            'turnOff'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_OFF,'_CONFIG_SHOW'=>1),
            'switch'=>array('DESCRIPTION'=>'Пареключить канал','_CONFIG_SHOW'=>1),
            'statusUpdated'=>array('DESCRIPTION'=>'Status updated','CALL_PARENT'=>1),
            'temp2W'=>array('DESCRIPTION'=>'https://mjdm.ru/forum/viewtopic.php?f=5&t=2263&start=710#','CALL_PARENT'=>1),
        )
);
        
@include_once(ROOT . 'languages/SMegaD2Wmdevice_' . SETTINGS_SITE_LANGUAGE . '.php');
@include_once(ROOT . 'languages/SMegaD2Wmdevice_default' . '.php');
