<?php
$secret = "thereIsNoGod,andWeWillAllDieAlone+l+ratio+iaminsideurwalls"; //such security i know
try {
    $db = new PDO("mysql:host=localhost;dbname=yazkampi", "root", "");
    $db->query("SET CHARACTER SET utf8");
}
catch(\Exception $e){
    print($e->getMessage());
}
