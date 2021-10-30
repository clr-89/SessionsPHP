<?php
session_start();
require 'inc/data/products.php';
if(empty($_SESSION['loginname'])) {
    header("Location: login.php");
}
?>
<?php require 'inc/head.php'; ?>

<section class="cookies container-fluid">
    <div class="row">
        <div class="products">

        <?php if(!empty($_SESSION['cookies'])) { ?>
            Mon panier :
            <ul>
                <?php $cookies= $_SESSION['cookies'];
                foreach($cookies as $id => $count) {
                    $cookieName= $catalog[$id]['name'];?>
                    <li><?= $count.' '.$cookieName ?></li>
                <?php } ?>
            </ul>

        <?php } ?>
        </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
