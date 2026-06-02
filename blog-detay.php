<?php
require_once "app/database.php";

if (($_GET["id"]) == null) {
    die("ERROR: No id provided! Please provide an id to view the blog post.");
}
$titlePre = $db->query("SELECT * FROM yazilar WHERE id = " . $_GET["id"]);
$titlePre = $titlePre->fetch(PDO::FETCH_ASSOC);
$kullaniciId = $titlePre["kullanici_id"];
$kullanici = $db->query("SELECT * FROM kullanicilar WHERE id = $kullaniciId");
$kullanici = $kullanici->fetch(PDO::FETCH_ASSOC);
$title = ($titlePre["baslik"]);
$img_size = ($titlePre["img_size"]);
require_once "app/header.php";
?>




<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <img src="uploads/<?= $titlePre["kapak_fotografi"] ?>" alt="<?= $titlePre ?>" width="<?= $img_size ?>%" height="<?= $img_size ?>%"
                                style="align-content: center;">
                        </div>
                        <div class="col-8 d-flex"
                            style="align-content: center; padding-top: 25px; justify-content: space-between;">
                            <h5><?= $title ?></h5>
                        </div>
                        <div class="col-12" style="font-size: 14px;">
                            <?= $titlePre["icerik"] ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Yazar:
                </div>
                <div class="card-body">
                    <img src="uploads\pfp.jpg" alt="afgafd" border-radius=50%>
                    
                        <h5><?= $kullanici["ad_soyad"] ?> </h5>
                        <p class="card-text" style=""><?= $kullanici["bio"] ?></p>
                
                </div>
            </div>
        </div>
    </div>


</div>
<?= require_once "app/footer.php"; ?>