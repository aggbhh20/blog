<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require_once("../app/database.php");
    if(@$_POST){
        $eposta = $_POST["eposta"];
        $parola = $_POST["parola"];
        if (!empty($eposta) && !empty($parola)) {
            $select = $db->prepare("SELECT * FROM kullanicilar WHERE eposta=? AND parola=?");
            $select->execute([$eposta, $parola]);
            if ($select->rowCount() > 0) {
                $user = $select->fetch(PDO::FETCH_ASSOC);
                $token = openssl_encrypt($user["id"].":".$user["ad_soyad"], "AES-128-CBC", $secret);
                $_SESSION["access_token"] = $token;
                header("Location: index.php");
            } else {
                echo "Kullanıcı adı veya şifre hatalı...";
            }
        } else {
            echo "Boş alan bırakmayınız...";
        }
    }
    ?>
    <form action="" method="post">
        E-Posta: <input type="email" name="eposta" required autocomplete="false"><br>
        parola: <input type="password" name="parola" required><br>
        <button type="submit">Giriş Yap</button>
    </form>
</body>
</html>