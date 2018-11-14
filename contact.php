<!-- MADE WITH LOVE BY DEM0NIAX -->

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Space Shop - Hébergeur</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

	<header>
		<nav class="navbar navbar-expand-lg navbar-dark indigo darken-2">
			<a class="navbar-brand" href="index.php">Space-Shop</a>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Accueil <i class="fa fa-home"></i></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produits <i class="fa fa-server"></i></a>
					<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item">VPS</a>
						<a class="dropdown-item">Hébergement WEB</a>
						<a class="dropdown-item">Serveur de jeux</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="faq.php">FAQ <i class="fa fa-group"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="thank.php">Remerciement <i class="fa fa-thumbs-up"></i></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="contact.php">Nous contacter <i class="fa fa-envelope"></i></a>
				</li>
			</ul> 
			<img src="https://image.noelshack.com/fichiers/2018/45/7/1541938865-image0.jpg" height="50" alt="logo">
		</nav>
	</header>

	<div class="top-body">
		<div class="fadeLeft">
			<h1 class="fadeInLeft">Space-Shop</h1>
			<h3>La vitesse de la lumière ? Nos machines sont bien plus rapides que ça !</h3><br><br>
			<p>Qu'est-ce que Space-Shop ? Space-Shop vous propose les meilleurs hébergeurs Web, VPS et serveurs de jeux à bas prix !</p>
			<p>Comment ça marche ? Rendez vous sur notre Discord pour commande : accessible <a href="https://discord.gg/UcHzq6x" target="_blank">ici</a>.</p>
			<p>Un staff & un support compétant sont disponible 24/24 et 7j/7 !</p><br>
		</div>
	</div><br>
	<div class="text-center">
		<h2>Nous Contacter</h2>
		<p>Un renseignement ? Une suggestion ? Vous pouvez nous envoyer un message, on vous répondra le plus rapidement possible !</p><br><br>
		<div class="container animated lightSpeedIn">
			<div class="row">
				<div class="col-md-9 mb-md-0 mb-5">
					<form id="contact-form" action="mail.php" method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="md-form mb-0">
                            		<input type="text" id="name" name="name" class="form-control" required>
                            		<label for="name" class="">Nom</label>
                        		</div>
							</div>
							<div class="col-md-6">
                        		<div class="md-form mb-0">
                            		<input type="text" id="email" name="email" class="form-control" required>
                            		<label for="email" class="">E-Mail</label>
                        		</div>
                    		</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="md-form mb-0">
									<input type="text" id="subject" name="subject" class="form-control" required>
									<label for="subject" class="">Sujet</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="md-form mb-0">
									<textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
									<label for="message" class="">Message</label>
								</div>
							</div>
						</div><br>
						<div class="text-center text-md-center">
							<button type="submit" class="btn btn-success"><i class="fa fa-send mr-1"></i>Envoyer</button>
						</div>
					</form>
					<div class="status" id="status"></div><br>
				</div>
				<div class="col-md-3 text-center">
					<ul class="list-unstyled">
						<li>
							<i class="fa fa-envelope fa-2x"></i> 
							<p>contact@space-shop.fr</p>
						</li>
					</ul>
				</div>
			</div>	
		</div>
	</div>



	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  	<script type="text/javascript" src="js/popper.min.js"></script>
  	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  	<!--<script type="text/javascript" src="js/app.js"></script>-->
  	<script type="text/javascript" src="js/mdb.min.js"></script>
	
</body>

<footer class="page-footer font-small indigo darken-2 pt-4">
	<div class="text-center">
		<h4 class="text-uppercase">Space-Shop</h4>
		<p>La vitesse de la lumière ? Nos machines sont bien plus rapides que ça !</p>
		<hr class="hr-white"><br>
		<h5 class="text-uppercase">Nous contacter :</h5>
		<p></p>
		<a class="btn-floating btn-fb mr-3" role="button" href="#" target="_blank"><i class="fa fa-lg fa-facebook"></i></a>
		<a class="btn-floating btn-tw mr-3" role="button" href="#" target="_blank"><i class="fa fa-lg fa-twitter"></i></a>
		<a class="btn-floating btn-email mr-3" role="button" href="#" target="_blank"><i class="fa fa-lg fa-envelope"></i></a>
	</div><br>
	<div class="footer-copyright text-center py-3">© 2018 Copyright :
      <a href="#">Space-Shop</a>
    </div>	
</footer>

</html>
