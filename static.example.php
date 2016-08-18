<?php
include 'AyvaInformAPI.class.php';
$api = new AyvaInformAPI("apiKey");
$params = array(
    'text' => 'Текст сообщения',
    'to' => '8(999)999-99-99',
    //'custom_id' => "uniq_id", // Присвоить свой ID для сообщения
    //'callback' => "http://callback.url", //URL для отслеживания изменения статуса сообщения
    //'aon' => '', // АОН
    //'gender' => '', // male|female, По умолчанию male
    //'when' => '', //date('Y-m-d H:i:s') Дата когда отправить сообщение
);
echo $api->sendMessage($params);

$params = array(
    'from' => 0,
    'start' => '2016-08-01 00:00:00',
    'end' => '2016-08-31 23:59:29',
    'phone' => '81234567890'
);
echo $api->getCalls($params);