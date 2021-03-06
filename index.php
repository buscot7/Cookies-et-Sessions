<?php
$panier = $_COOKIE["panier"];
if (isset($_GET['add_to_cart'])) {
    switch ($_GET["add_to_cart"]) {
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
}
?>
<?php session_start() ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Cookie Factory</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/styles.css" />
    </head>
<body>
<header>
    <!-- MENU ENTETE -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" >
                    <img class="pull-left" src="assets/img/cookie_funny_clipart.png" alt="The Cookies Factory logo">
                    <h1>The Cookies Factory</h1>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Chocolates chips</a></li>
                    <li><a href="index.php">Nuts</a></li>
                    <li><a href="index.php">Gluten full</a></li>
                    <li><a href="cart.php" class="btn btn-warning navbar-btn">
                            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                            Cart
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container-fluid text-right">
        <strong>Hello <?php if (isset($_SESSION['login'])) {echo $_SESSION['login'];} ?> !</strong><br>
    </div>
</header>
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
                    <p><?php if (isset ($choco)){echo "Vous avez " . $choco . " Chocolates cookie dans votre panier !";}?></p>
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
    <a href="sessionEnd.php"><strong><?php if (isset($_SESSION['login'])) {echo 'Se déconnecter';}?></strong></a>
</section>
<?php require 'inc/foot.php'; ?>