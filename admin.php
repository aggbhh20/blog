<?php
include "app/database.php";
$select = $db->query("SELECT * FROM iletisim ORDER by id DESC");
$allData = $select->fetchAll(PDO::FETCH_ASSOC);
?>
<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>#</th>
            <th>Ad Soyad</th>
            <th>E-Posta</th>
            <th>Açıklama</th>
            <th>Tarih</th>
            <th>İşlem</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($allData as $row): ?>
            <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['ad_soyad']?></td>
                <td><?=$row['email']?></td>
                <td><?=$row['mesaj']?></td>
                <td><?=$row['tarih']?></td>
                <td>
                    <a style="color:green" href="admin-guncelle?id=<?=$row['id']?>">Güncelle</a>
                    <a style="color:red" href="admin-sil?id=<?=$row['id']?>">Sil</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>