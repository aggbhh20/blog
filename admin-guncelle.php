<?php
include "app/database.php";
$id = @$_GET['id'];

if (empty($id)) {
    die("ID bilgisi gönderilmemiş...");
}

$select = $db->prepare("SELECT * FROM iletisim WHERE id=?");
$select->execute([$id]);

if ($select->rowCount() < 1) {
    die("ID bilgisi geçersiz...");
}

$row = $select->fetch(PDO::FETCH_ASSOC);

if (@$_POST) {
    $adsoyad = @$_POST['adsoyad'];
    $eposta = @$_POST['email'];
    $aciklama = @$_POST['mesaj'];

    if (!empty($adsoyad) && !empty($eposta) && !empty($aciklama)) {
        $update = $db->prepare("UPDATE iletisim SET ad_soyad=?, email=?, mesaj=? WHERE id=?");
        $result = $update->execute([ $adsoyad, $eposta, $aciklama, $row["id"] ]);

        if ($result) {
            echo "Başarılı bir şekilde güncellendi... <a href='admin'>Geri Dön</a> <br>";
        } else {
            echo "Sistemsel bir sorun oluştu. Lütfen daha sonra tekrar deneyiniz...<br>";
        }
    } else {
        echo "Boş alan bırakmayınız...<br>";
    }
}

?>
<form action="" method="post">
    <h2>İletişim</h2>
    <div>
        <label>Ad Soyad</label>
        <input type="text" name="adsoyad" value="<?=$row["ad_soyad"]?>" placeholder="Yusuf Özçelik">
    </div>
    <div>
        <label>E-Posta Adresi</label>
        <input type="email" name="email" value="<?=$row["email"]?>" placeholder="name@example.com">
    </div>
    <div>
        <label>Açıklama</label>
        <textarea name="mesaj" rows="3"><?=$row["mesaj"]?></textarea>
    </div>
    <button type="submit">Gönder</button>
</form> 