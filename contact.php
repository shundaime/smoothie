<?php
include_once "UserSession.class.php";
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
        
        <main class="main-contact">

            <section id="contact">
                <h1>Contact</h1>
                <div class="container">
                
                    <form name="htmlform" method="post" action="toyousender.php">
                    <br />
                    <input type="text" name="first_name" placeholder="NOM" required>
                    <br />
                    <input  type="email" name="email" placeholder="EMAIL" required>
                    <br />
                    <textarea name="comments" placeholder="MESSAGE" required ></textarea>
                    <br />
                    <button name="send" type="submit" class="submit">ENVOYER</button>
                    </form>
                </div>

            </section>

            <section id="adresse">
                    <h1>Venez nous voir!</h1>
                    <h2>Smooth Maker</h2>
                    <p>8 quai Saint Guillaume</p>
                    <p>69004 Lyon</p>
                    <p>tel: 04 78 65 25 14</p>
                    <p>mob: 06 75 27 85 53</p>
                    <p>email: contact@smoothmaker.com</p>
            </section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22260.43323539892!2d4.808342419628179!3d45.78012471276477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eb1eb2c579ef%3A0xad42a6e9b6b1d4ad!2sCroix-Rousse%2C+69004+Lyon!5e0!3m2!1sfr!2sfr!4v1545213695419" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

        </main>


        <footer>
                <div id="footerLogo">
                    <a href="index.php">
                    <img src="assets/logo/desktop-logo.png">
                    </a>
                </div>
                <div class="footerText">
                    <p>2018 &copy; Tous droits réservés Vincent, Melissa aka Mel, Guillaume et Badiss</p>
                </div>
                    
                </footer>
   
            </body>
        </html>