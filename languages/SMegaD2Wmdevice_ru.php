<?php

$dictionary = array(

    'SRazdel_PATTERN_BRIGHTNESS' => 'ярк|ярч|яркость',
    'SRazdel_PATTERN_COLORTEMPERATURE' => 'температур|температура',
    'DEVICES_LINK_SENSOR_PASS_BATTERY' => 'Пересылка данных о батареи',
    'DEVICES_LINK_SENSOR_PASS_BATTERY_DESCRIPTION' => 'Выставляет свойства в связанном объекте и посылает данные в HomeKit',
    'DEVICES_LINK_ZONA_SWITCH' => 'Управление устройством',
    'DEVICES_LINK_ZONA_SWITCH_DESCRIPTION' => 'Управление другим устройствам в зависимости от статуса',
    'DEVICES_LINK_ZONA_INVERT' => 'Инвертная установка статуса',
    'DEVICES_LINK_ZONA_AUTO' => 'Авто',
);

foreach ($dictionary as $k => $v) {
 if (!defined('LANG_' . $k)) {
  @define('LANG_' . $k, $v);
 }
}
