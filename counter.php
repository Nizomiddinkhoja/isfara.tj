<?php
$userhash = $_COOKIE["userhash"];
if (!$userhash) {
    $userhash = uniqid();
    setcookie("userhash", $userhash, 0x6FFFFFFF);
}
$ip = $_SERVER["REMOTE_ADDR"]; // Преобразуем IP в число
$uri = $_SERVER["REQUEST_URI"]; // Узнаём uri
$ref = $_SERVER["HTTP_REFERER"]; // Узнаём, откуда пришёл
$browser = $_SERVER["HTTP_USER_AGENT"];
$date = date("Y-m-d H:i:s", time()); // Берём текущее время
$dbOperations = new DBOperations();
$dbOperations->addVisitor($userhash, $ip, $uri, $ref, $browser, $date);
