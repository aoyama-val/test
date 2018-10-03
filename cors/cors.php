<?php

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_DEPRECATED);
date_default_timezone_set('Asia/Tokyo');
mb_internal_encoding('UTF-8');
mb_language('uni');

header('Content-Type: application/json');
header('Access-Control-Allow-Headers: X-Aiueo');
header('Access-Control-Allow-Origin: http://aosho235.com,http://localhost:8000');
?>
{
    "message": "Hello, CORS!"
}
