<?php session_start();
if (!isset($_SESSION["name"]))
{
    header("Location: login.php");
}
require 'inc/head.php';
?>

<section class="cookies container-fluid">
    <div class="row">
        <?php
        foreach ($_COOKIE["panier"] as $id => $cookies){
            $cookette = unserialize($cookies);
            ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookette["product"]["name"]; ?></h3>
                        <p><?= $cookette["product"]["description"]; ?></p>
                        <p>Vous en avez commandé : <?= $cookette["quantity"] ?></p>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
