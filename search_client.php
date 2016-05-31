<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
</head>

<body data-spy="scroll">

<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li><a href="/create_client.php" class="gn-icon gn-icon-archive">Créer un client</a></li>
                                <li><a href="/create_location.php" class="gn-icon gn-icon-archive">Créer une location</a></li>
                                <li><a href="/return_location.php" class="gn-icon gn-icon-download">Retour location</a></li>
                                <li><a href="/current_location.php" class="gn-icon gn-icon-download">Location en cours</a></li>
                                <li><a href="/create_car.php" class="gn-icon gn-icon-archive">Ajouter un véhicule</a></li>
                                <li><a href="/search_client.php" class="gn-icon gn-icon-download">Gestion client</a>
                                <li><a href="/assurance.php" class="gn-icon gn-icon-archive">Assurances</a>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="index.php">RENT-A-CAR</a></li>	
			</ul>
	</div>

	<section id="contact" class="home-section text-center">
        <div class="heading-contact marginbot-50">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="section-heading">
                    <h2>Liste des utilisateurs</h2>                
                    </div>                
                </div>
            </div>
            </div>
        </div>
        <div class="container">

    <div class="row">
        <div class="col-lg-10 col-md-offset-1">
            	<form class="form col-md-12 center-block" method="post">
            		<div class="form-group">
            		<h5> Pour chercher un client, entrez son nom</h5>
             		 <input type="text" class="form-control input-lg" name="name" id="name" placeholder="Nom du client">
             		 <br>
                	<h5> ou son mail</h5>
              		 <input type="mail" class="form-control input-lg" name="mail" id="mail" placeholder="Mail du client">
              		 </div>
 	            </form>    
            

            <br>

            <div class="col-md-5">
                <button type="submit" class="btn btn-skin pull-right" id="btnInscription" target="/create_location.php">
                            Supprimer les clients sélectionnés </button>
        	</div>

        	<div class="col-md-6">
                <button type="submit" class="btn btn-skin pull-right" id="btnInscription" target="/create_location.php">
                            Voir détails des sélections </button>
        	</div>  
            
        </div>
    </section>


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<p>Copyright &copy;  by Damien Detry</a></p>
				</div>
			</div>	
		</div>
	</footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/classie.js"></script>
	<script src="js/gnmenu.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	<script src="js/stellar.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
