<?php

$ot = $this->object_title;
$ipAddress = $this->getProperty('ipAddress');
$Password = $this->getProperty('Password');
$Port = $this->getProperty('Port');
$ch = $this->getProperty('ch');
$status = $this->getProperty('status');
$Address = $this->getProperty('bAddress');

//http://192.168.10.101/sec/?pt=8&cmd=list
//http://192.168.10.101/sec/?cmd=8A:0
//http://192.168.10.101/sec/?cmd=8A:0&addr=312538000000

//Задаем массив датчиков: [матка => [номер свойства, доступность, показание]]
    $tempSensors = [
        "0e3638000000" => [1, false, -1],
        "323538000000" => [2, false, -1],
        "7d3738000000" => [3, false, -1],
        "565538000000" => [4, false, -1],
        "7dgh38000000" => [5, false, -1],
        "312538000000" => [6, false, -1],
    ];
//не зарегистрированный датчики на шине
    $notRegSensors = "";
//Получаем строку с меги и делим ее по датчикам в массив
    //$listTemps = "ff2790c11604:24.18;fff7b0b31603:23.81";
    $listTemps = file_get_contents("http://".$ipAddress."/".$Password."/?pt=".$Port."&cmd=list");
    $temps = explode( ';', $listTemps);
//    print_r ($temps);
    
    $this->setProperty("temps", $temps);
    
//Сравнивая метки пишем показания, меняя доступность
    foreach($temps as $temp){
        $temp = explode( ':', $temp);
        if(array_key_exists($temp[0], $tempSensors)){
            $tempSensors[$temp[0]][1] = true;
             $tempSensors[$temp[0]][2] = $temp[1];
        }else{//пишем не найденные датчики в свойство
            $notRegSensors = $notRegSensors."$temp[0]; ";
        }
    }
//    print_r ($tempSensors);
    
//обновляем свойства
    foreach($tempSensors as $key => $sensor){
     $this->setProperty($sensor[0], $sensor[2]);
    }
    $this->setProperty("notRegSensors", $notRegSensors);
//    print_r ($key);
//    print_r ($sensor);
    
        $this->setProperty("key", $key);
        $this->setProperty("sens", $sensor[2]);
//$state = file_get_contents("http://".$ipAddress."/".$Password."/?pt=".$Port."&cmd=list");// http://192.168.10.100/sec/?pt=7
//$state = substr($state,13,5);
//if ($state != "OFF") 
//{
// print_r ($state); 
//} 


//$listT = file_get_contents("http://192.168.10.101/sec/?pt=8&cmd=conv"); //И если критично? опрашивать шину принудительно
//$tempT = explode( ';', $listT);
//print_r ($tempT);
//return; 
