<?php
 
$this->device_types['megad2wm_relay'] = array(
        'TITLE'=>'Реле MegaD2Wm',
        'PARENT_CLASS'=>'SControllers',
        'CLASS'=>'SMegaD2WmRelays',
        'PROPERTIES'=>array(
            'ipAddress'=>array('DESCRIPTION'=>'IP адрес MegaD устройства', '_CONFIG_TYPE'=>'text', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'Password'=>array('DESCRIPTION'=>'Пароль MegaD устройства', '_CONFIG_TYPE'=>'text', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'Port'=>array('DESCRIPTION'=>'Порт MegaD устройства', '_CONFIG_TYPE'=>'text', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'bAddress'=>array('DESCRIPTION'=>'Адрес MegaD2W устройства', '_CONFIG_TYPE'=>'text', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'ch'=>array('DESCRIPTION'=>'Канал MegaD2W устройства', '_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'A=A,B=B'),
            'status'=>array('DESCRIPTION'=>'Состояние канал MegaD2W','ONCHANGE'=>'statusUpdated', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'timeout'=>array('DESCRIPTION'=>'Время отключения канала (мин.)', '_CONFIG_TYPE'=>'text', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'stored_value'=>array('DESCRIPTION'=>'История канала', 'KEEP_HISTORY'=>0, 'DATA_KEY'=>1),
            'groupEco'=>array('DESCRIPTION'=>LANG_DEVICES_GROUP_ECO,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdGroupEco'),
            'groupEcoOn'=>array('DESCRIPTION'=>LANG_DEVICES_GROUP_ECO_ON,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdGroupEcoOn'),
            'groupSunrise'=>array('DESCRIPTION'=>LANG_DEVICES_GROUP_SUNRISE,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdGroupSunrise'),
            'groupSunset'=>array('DESCRIPTION'=>LANG_DEVICES_GROUP_SUNSET,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdGroupSunset'),
            'isActivity'=>array('DESCRIPTION'=>LANG_DEVICES_IS_ACTIVITY,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdIsActivity'),
            'autoMode'=>array('DESCRIPTION'=>'Авто отключение канала','_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdautoMode'),
            'loadType'=>array('DESCRIPTION'=>LANG_DEVICES_LOADTYPE,
                '_CONFIG_TYPE'=>'select','_CONFIG_HELP'=>'SdLoadType',
                '_CONFIG_OPTIONS'=>'light='.LANG_DEVICES_LOADTYPE_LIGHT.
                    ',heating='.LANG_DEVICES_LOADTYPE_HEATING.
                    ',vent='.LANG_DEVICES_LOADTYPE_VENT.
                    ',curtains='.LANG_DEVICES_LOADTYPE_CURTAINS.
                    ',gates='.LANG_DEVICES_LOADTYPE_GATES.
                    ',power='.LANG_DEVICES_LOADTYPE_POWER),
            'icon'=>array('DESCRIPTION'=>LANG_IMAGE,'_CONFIG_TYPE'=>'style_image','_CONFIG_HELP'=>'SdIcon'),
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
