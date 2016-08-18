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
