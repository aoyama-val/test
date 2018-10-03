<?php

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_DEPRECATED);
date_default_timezone_set('Asia/Tokyo');
mb_internal_encoding('UTF-8');
mb_language('uni');

header('Access-Control-Allow-Origin: http://aosho235.com');


?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>index.php</title>
<script src="https://code.jquery.com/jquery-2.2.1.min.js" async></script>
<script>
    function hello() {
        $.ajax({
            method: "POST",
            url: "cors.php",
            data: { "hoge" : 123 },
            dataType: "json",
        })
        .done(function(data) {
            console.log("data", data);
        })
        .fail(function() {
            console.log("エラーです");
        });
    }
</script>
</head>
<body>
    <button onclick="hello()">hello</button>
</body>
</html>
