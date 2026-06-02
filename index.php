<?php
$title = "Home";
require_once "app/header.php";

$yazilar = $db->query("SELECT * FROM yazilar LIMIT 5");
$yazilar = $yazilar->fetchAll(PDO::FETCH_ASSOC);



?>
<div class="container my-3">
    <div class="row">

        <?php foreach ($yazilar as $yazi) { ?>
            
            <div class="col-4 mb-4">
                <div class="card h-100">
                    
                    <img src="uploads/<?= $yazi["kapak_fotografi"] ?>" 
                         class="card-img-top" 
                         alt="<?= $yazi["baslik"] ?>">

                    <div class="card-body">
                        <h5 class="card-title"><?= $yazi["baslik"] ?></h5>

                        <p class="card-text">
                            <?= substr($yazi["icerik"], 0, 100) ?>...
                        </p>

                        <a href="blog-detay?id=<?= $yazi["id"] ?>" 
                           target="_blank"
                           class="btn btn-primary">
                           Read Now
                        </a>
                    </div>

                </div>
            </div>

        <?php } ?>

    </div>
</div>
</div>
</div>
<?php
require_once "app/footer.php";