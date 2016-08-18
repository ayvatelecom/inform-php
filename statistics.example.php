<?php
include 'AyvaInformAPI.class.php';
$api = new AyvaInformAPI("apiKey");

$params = array(
'from' => 0, // С какого сообщения по счёту показатьвать результат (не обязательное поле)
'start' => '2016-08-01 00:00:00', // С какой даты искать (не обязательное поле)
'end' => '2016-08-31 23:59:29', // По какую дату искать (не обязательное поле)
// Если не указана одна из дат условие выбора по периоду не будет работать.
'phone' => '81234567890' // Номер телефона (не обязательное поле)
);

echo $api->getCalls($params);