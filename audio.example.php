<?php
include 'AyvaInformAPI.class.php';
$api = new AyvaInformAPI("apiKey");
$params = array(
    'to' => '8(999)999-99-99',
    'type' => 'audio',
    'url' => 'http://audio.url', // URL проигрываемого аудио файла
    //'custom_id' => "uniq_id", // Присвоить свой ID для сообщения
    //'callback' => "http://callback.url", //URL для отслеживания изменения статуса сообщения
    //'aon' => '', // АОН
    //'gender' => '', // male|female, По умолчанию male
    //'when' => '', //date('Y-m-d H:i:s') Дата когда отправить сообщение
);
$api->sendMessage($params);
echo $api->response;
