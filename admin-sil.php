<?php
include "app/database.php";
$id = @$_GET['id'];

if (empty($id)) {
    die("ID bilgisi gönderilmemiş...");
}

$select = $db->prepare("DELETE FROM iletisim WHERE id=?");
$result = $select->execute([$id]);

if ($result) {
    echo "Başarıyla silindi... <a href='admin'>Geri Dön</a>";
} else {
    echo "Silme işlemi sırasında bir hata oluştu... <a href='admin'>Geri Dön</a>";
}