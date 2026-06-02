<?php 
session_start();
require_once("../app/database.php");

if(empty($_SESSION["access_token"])){
    header("Location: login.php");
}

$user = explode(":", openssl_decrypt($_SESSION["access_token"], "AES-128-CBC", $secret));
echo "Hoşgeldin " . $user[0] . " - " . $user[1].". <a href='logout.php'>Çıkış Yap</a>";

if($_POST){
    $title = @$_POST["title"];
    $image = @$_POST["image"];
    $post_cnt = @$_POST["post_cnt"];
    $userId = $user[0];

    if(!empty($title) && !empty($image) && !empty($post_cnt)){
        $insert = $db->prepare("INSERT INTO yazilar (baslik, kullanici_id, kapak_fotografi, icerik) VALUES (?, ?, ?, ?)");
        $result = $insert->execute([$title, $userId, $image, $post_cnt]);
        if($result){
            echo "Başarılı bir şekilde eklendi... <a href='index.php'>Geri Dön</a>";
        } else {
            echo "Sistemsel bir sorun oluştu. Lütfen daha sonra tekrar deneyiniz...<br>";
        }
    } else {
        echo "Boş alan bırakmayınız...<br>";
    }
}

?>
<form action="" method="post">
    <h2>Add New Post</h2>
    <div>
        <label>Title</label>
        <input type="text" name="title" placeholder="Title..">
    </div>
    <div>
        <label>Image</label>
        <input type="file" name="image">
    </div>
    <div>
        <label>Post</label>
        <textarea name="post_cnt" rows="3"></textarea>
    </div>
    <button type="submit">Gönder</button>
</form> 