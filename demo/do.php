<?php
require "../src/EncryptionUtil.php";

$key = $_POST["key"];
$method = (int) $_POST["method"];
$message = $_POST["message"];
$iterations = (int) $_POST["iterations"];

if ($method === 1) {
    $tmp = $message;
    for ($i = 0; $i < $iterations; $i++) {
        $tmp = EncryptionUtil::encrypt($tmp, $key);
    }
    echo base64_encode($tmp);
} else {
    $tmp = base64_decode($message);
    for ($i = 0; $i < $iterations; $i++) {
        $tmp = EncryptionUtil::decrypt($tmp, $key);
    }
    echo $tmp;
}