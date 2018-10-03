<?php

ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_DEPRECATED);
date_default_timezone_set('Asia/Tokyo');
mb_internal_encoding('UTF-8');
mb_language('uni');

if (isset($_COOKIE["hoge"])) {
    $hoge = $_COOKIE["hoge"] + 1;
}
setcookie("hoge", $hoge);

?>
hoge = <?php echo $_COOKIE["hoge"] ?? "null"; ?>
