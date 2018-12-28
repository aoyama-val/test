<?php

$COOKIE_USER_ORIGIN = "http://18.179.118.46";

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_DEPRECATED);
date_default_timezone_set('Asia/Tokyo');
mb_internal_encoding('UTF-8');
mb_language('uni');

header("Access-Control-Allow-Origin: $COOKIE_USER_ORIGIN");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type, *");

header("Content-Type: application/json; charset=UTF-8");

echo json_encode([
    "aiueo" => $_COOKIE["aiueo"] ?? '',
]);
