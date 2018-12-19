<?php
include_once "UserSession.class.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <title>Document</title>
</head>
<body>
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
    <main class="container">
        <h1>Local, Bio et éco-responsable</h1>
        <section>
            <h2>The concept</h2>
            <article class="concept1">
                <h3>Bio et Local</h3>
            <img src="assets/concept/bio.jpeg">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi consectetur explicabo nobis delectus nulla rerum quidem voluptatem suscipit tempore maxime necessitatibus 
            obcaecati porro labore neque officiis, accusantium a fuga cumque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur laboriosam dolores magnam, mollitia dolore quibusdam quod nostrum quidem impedit vitae perspiciatis debitis 
            similique deleniti aliquam non ex provident voluptatum numquam!</p>
            </article>
            <article class="concept2">
                <h3>Eco-responsable</h3>
                <div>
                    <img src="assets/concept/eco_responsabilite.png">
                </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi consectetur explicabo nobis delectus nulla rerum quidem voluptatem suscipit tempore maxime necessitatibus 
            obcaecati porro labore neque officiis, accusantium a fuga cumque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur laboriosam dolores magnam, mollitia dolore quibusdam quod nostrum quidem impedit vitae perspiciatis debitis 
            similique deleniti aliquam non ex provident voluptatum numquam!</p>
            </article>
        </section>
        <article class="nous">
            <ul>
                <li><img src="assets/img_produit/nos-jus-beautiful.jpg"></li>
                <li><h3>Guillaume</h3></li>
                <li><p>Description drole</p></li>
            </ul>
            <ul>
                <li><img src="assets/img_produit/nos-jus-detox.jpg"></li>
                <li><h3>Vincent</h3></li>
                <li><p>Description drole</p></li>
            </ul>
            <ul>
                <li><img src="assets/img_produit/nos-jus-pulse.jpg"></li>
                <li><h3>Badiss</h3></li>
                <li><p>Description drole</p></li>
            </ul>
            <ul>
                <li><img src="assets/img_produit/nos-jus-young.jpg"></li>
                <li><h3>Moi_même</h3></li>
                <li><p>Description drole</p></li>
            </ul>
        </article>
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
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>