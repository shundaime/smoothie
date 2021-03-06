<?php
include_once "UserSession.class.php";
include "lastProducts.php";
include "categorie.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Smoothie Maker</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	</head>
	<body>
		<!--HEADER-->
		<header>
            <a href="index.php"><img src="assets/logo/desktop-logo.png"></a>
			<nav>
                <ul>
					<li><a href="allProducts.php">Nos produit</a></li>
					<li><a href="concept.php">Notre concept</a></li>
                    <li><a href="contact.php">Nous contacter</a></li>
                </ul>
            </nav>
            <div class="user-area">
        <?php $userSession = new UserSession(); ?>
        <?php if($userSession->isAuthenticated()): ?>
               <ul>
                   <li><i class="fas fa-user"></i>Bonjour <?=$userSession -> getFullName();?>, vous ếtes connecté !</li>
                   <li><i class="fas fa-heart"></i> Mes recettes favorites</li>
                   <li><a href="logout.php"><i class="fas fa-times-circle"></i> Déconnexion</li></a>
               </ul>
           </div>
                    <?php else: ?>
                        <li><a href="login.html">Connectez-vous</a></li>
                    <?php endif;?>
        </header>

		<!--MAIN CONTENT-->
		<main class="container">
            <h1>Local, Bio et éco-responsable</h1>
            <section class="last-products" id="lastProducts">
            <h2>Nos petits derniers</h2>
                <?php foreach ($lastProducts as $value):?>
                    <article>
                        <ul>
                            <li><a href="productById.html?id=<?=$value['id']?>"><img src="assets/img_produit/<?=$value['picture']?>"></a></li>
                            <li><a href="#"><h3><?=$value['nameProduct']?></h3></a></li>
                            <li><a href="#"><p><?=$value['description']?></p></a></li>
                        </ul>
                    </article>
                <?php endforeach; ?>
            </section>

            <section class="categories">
            <h2>Nos catégories</h2>
                <?php foreach ($categories as $value):?>
                    <article>
                            <ul>
                                <li><a href="productByCat.php?id=<?=$value['id']?>"><img src="assets/iconVincent/<?=$value['icone']?>"></a></li>
                                <li><a href="productByCat.php?id=<?=$value['id']?>"><h3><?= $value['libelle']?></h3></a></li>
                                <li><a href="productByCat.php?id=<?=$value['id']?>"><p><?= $value['description']?></p></a></li>
                            </ul>
                    </article>
                <?php endforeach; ?>
            </section>
          
		</main>
		<!--FOOTER-->
		<footer>
		<div id="footerLogo">
            <a href="#">
			<img src="assets/logo/desktop-logo.png">
            </a>
        </div>
        <div class="footerText">
            <p>2018 &copy; Tous droits réservés Vincent, Melissa aka Mel, Guillaume et Badiss</p>
        </div>
			
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>	
  	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    </body>
</html>
