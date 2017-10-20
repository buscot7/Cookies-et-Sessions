<?php require 'inc/head.php'; ?>
<?php
if (!isset($_SESSION['login'])) {
    header('location: index.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">
      <h1>Votre panier :</h1><br><br>
        <p><?php if ($_COOKIE["panier"]['46']){echo "Vous avez " . $_COOKIE["panier"]['46'] . " Pecan nuts dans votre panier !";}?></p><br>
        <p><?php if ($_COOKIE["panier"]['36']){echo "Vous avez " . $_COOKIE["panier"]['36'] . " Chocolate chips dans votre panier !";}?></p><br>
        <p><?php if ($_COOKIE["panier"]['58']){echo "Vous avez " . $_COOKIE["panier"]['58'] . " Chocolate cookie dans votre panier !";}?></p><br>
        <p><?php if ($_COOKIE["panier"]['32']){echo "Vous avez " . $_COOKIE["panier"]['32'] . " M&M's&copy; cookies dans votre panier !";}?></p><br>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
