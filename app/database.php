<?php
$secret = "thereIsNoGod,andWeWillAllDieAlone+l+ratio+iaminsideurwalls"; //do not use this to actually secure your website! 
try {
    $db = new PDO("mysql:host=localhost;dbname=yazkampi", "root", "");
    $db->query("SET CHARACTER SET utf8");
}
catch(\Exception $e){
    print($e->getMessage());
}
