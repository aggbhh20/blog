<?php
$secret = "thereIsNoGod,andWeWillAllDieAlone+fuckTrump+l+ratio+iaminsideurwallsMAGA2024";
try {
    $db = new PDO("mysql:host=localhost;dbname=yazkampi", "root", "");
    $db->query("SET CHARACTER SET utf8");
}
catch(\Exception $e){
    print($e->getMessage());
}
