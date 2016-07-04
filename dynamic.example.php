<?php
include 'AyvaInformAPI.class.php';

//================ СЦЕНАРИЙ ИЗ СПИСКА В ЛИЧНОМ КАБИНЕТЕ ====================//
$api = new AyvaInformAPI("apiKey");
$response = json_decode($api->getScenaries()); // Получаем список доступных сценариев

$vaiables = array(
    'lname' => 'Фамилия',
    'fname' => 'Имя',
    'mname' => 'Отчество'
);
$params = array(
    'to' => '8(999)999-99-99',
    'type' => 'dynamic',
    'scenary' => $response->scenaries[0]->id, // Первый сценарий из списка
    'variables' => $vaiables, //Переменные для используемых в сценарии шаблонов
    //'custom_id' => "uniq_id", // Присвоить свой ID для сообщения
    //'callback' => "http://callback.url", //URL для отслеживания изменения статуса сообщения
    //'aon' => '', // АОН
    //'gender' => '', // male|female, По умолчанию male
    //'when' => '', //date('Y-m-d H:i:s') Дата когда отправить сообщение
);
$api->sendMessage($params);
echo $api->response;

//================ СВОЙ СЦЕНАРИЙ ====================//
$api = new AyvaInformAPI("apiKey");
$scenary = array(
    array(
        'order' => 1,
        'action' => 'tts',
        'params' => array(
            'text' => 'Привет %fname%',
            'tts_speed' => 'medium',
            'voice' => 'male'
        )
    ),
    array(
        'order' => 2,
        'action' => 'hang_up',
        'params' => ""
    ),
);
$vaiables = array(
    'lname' => 'Фамилия',
    'fname' => 'Имя',
    'mname' => 'Отчество'
);
$params = array(
    'to' => '8(999)999-99-99',
    'type' => 'dynamic',
    'scenary' => $scenary, // Первый сценарий из списка
    'variables' => $vaiables, //Переменные для используемых в сценарии шаблонов
    //'custom_id' => "uniq_id", // Присвоить свой ID для сообщения
    //'callback' => "http://callback.url", //URL для отслеживания изменения статуса сообщения
    //'aon' => '', // АОН
    //'gender' => '', // male|female, По умолчанию male
    //'when' => '', //date('Y-m-d H:i:s') Дата когда отправить сообщение
);
$api->sendMessage($params);
echo $api->response;
