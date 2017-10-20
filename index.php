<?php
$panier = $_COOKIE["panier"];
switch ($_GET["add_to_cart"])
{
    case "46":
        $panier["46"]++;
        setCookie("panier[46]", $panier["46"]);
        $pecan = ($_COOKIE["panier"]['46']) + 1;
        break;
    case "36":
        $panier["36"]++;
        setCookie("panier[36]", $panier["36"]);
        $chocolate = ($_COOKIE["panier"]['36']) + 1;
        break;
    case "58":
        $panier["58"]++;
        setCookie("panier[58]", $panier["58"]);
        $choco = ($_COOKIE["panier"]['58']) + 1;
        break;
    case "32":
        $panier["32"]++;
        setCookie("panier[32]", $panier["32"]);
        $mnm = ($_COOKIE["panier"]['32']) + 1;
        break;
}
?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
          <a href="index.php?add_to_cart=46" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a><br><br>
            <p><?php if (isset ($pecan)){echo "Vous avez " . $pecan . " Pecan nuts dans votre panier !";}?></p>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
          <a href="index.php?add_to_cart=36" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a><br><br>
            <p><?php if (isset ($chocolate)){echo "Vous avez " . $chocolate . " Chocolate chips dans votre panier !";}?></p>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
          <a href="index.php?add_to_cart=58" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a><br><br>
            <p><?php if (isset ($choco)){echo "Vous avez " . $choco . " Chocolate cookie dans votre panier !";}?></p>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
          <a href="index.php?add_to_cart=32" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a><br><br>
            <p><?php if (isset ($mnm)){echo "Vous avez " . $mnm . " M&M's&copy; cookies dans votre panier !";}?></p>
        </figcaption>
      </figure>
    </div>
  </div>
    <a href="login.php"><strong><?php if (!isset($_SESSION['login'])){echo 'Se connecter';}?></strong></a><br>
    <a href="sessionEnd.php"><strong><?php if ($_SESSION['login']){echo 'Se déconnecter';}?></strong></a>
</section>
<?php require 'inc/foot.php'; ?>