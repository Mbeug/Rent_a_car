<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Création d'un client</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts --><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="css/nivo-lightbox.css" rel="stylesheet" />
    <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
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

    <!-- Section: contact -->
    <section id="contact" class="home-section text-center">
        <div class="heading-contact marginbot-50">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
    
                    <div class="section-heading">
                    <h2>Création d'un nouveau client</h2>
                    <p>
                        Pour qu'un client puisse faire des résérvations, il faut d'abord l'inscrire dans la base de donnée
                    </p>
                    </div>
                
                </div>
            </div>
            </div>
        </div>
        <div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-offset-2">
            <div class="boxed-grey">
                <form id="contact-form" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nom</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Entrez nom" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="prenom">
                                Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez prénom" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="mail">
                                Adresse e-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="mail" name="mail" placeholder="Enter email" required="required" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="type_permis">
                                Type de permis</label>
                            <input type="type_permis" class="form-control" id="type_permis" name="type_permis" placeholder="Quel type de permis le client possède t-il ?" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="num_permis">
                                Numéro de permis</label>
                            <input type="num_permis" class="form-control" id="num_permis" name="num_permis" placeholder="Entrez numéro de permis" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="num_tel">
                                Numéro de téléphone</label>
                            <input type="num_tel" class="form-control" id="num_tel" name="num_tel" placeholder="Entrez numéro de téléphone" required="required" />
                        </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnInscription" target="/accueil">
                            Envoi inscription</button>
                    </div>
                </div>
                </form>
            </div>
            
        </div>
    </section>

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

