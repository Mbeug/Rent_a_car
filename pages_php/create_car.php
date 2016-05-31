<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Création d'un véhicule</title>

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
                    <h2>Création d'un nouveau véhicule</h2>
                    <p>
                        Sur cette page, vous pouvez ajouter un nouveau véhicule à louer dans la base de donnée
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
                            
                            <div class="form-group">
                            <label for="boite_vitesse">
                                Boite de vitesse </label>
                                <select id="boite_vitesse" name="boite_vitesse" class="form-control" required>
                                    <option value="na" selected="">Choisissez dans la liste</option>
                                    <option value="manuelle">Manuelle</option>
                                    <option value="automatique">Automatique</option>
                                </select>
                            </div>

                        <div class="form-group">
                            <div class="form-group">
                            <label for="autoradio">
                                Autoradio </label>
                            <select id="autoradio" name="autoradio" class="form-control" required>
                                <option value="na" selected="">Choisissez dans la liste</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                        </div>

                        <div class="form-group">                           
                            <div class="form-group">
                            <label for="nbr-porte">
                                Nombre de portes </label>
                            <select id="nbr_porte" name="nbr_porte" class="form-control" required>
                                <option value="na" selected="">Choisissez dans la liste</option>
                                <option value="3">3</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                            <label for="climatisation">
                                Climatisation </label>
                            <select id="climatisation" name="climatisation" class="form-control" required>
                                <option value="na" selected="">Choisissez dans la liste</option>
                                <option value="oui">Oui</option>
                                <option value="non">Non</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                            <label for="marque">
                                Marque </label>
                            <select id="marque" name="marque" class="form-control" required>
                                <option value="na" selected="">Choisissez dans la liste</option>
                                <option value="Mercedes">Mercedes</option>
                                <option value="Audi">Audi</option>
                                <option value="Renault">Renault</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                            <label for="type">
                                Type</label>
                            <select id="type" name="type" class="form-control" required>
                                <option value="na" selected="">Choisissez dans la liste</option>
                                
                            </select>
                        </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnInscription" target="/index.php">
                            Ajouter le véhicule </button>
                    </div>
                </div>

                <?php
                $name = $_POST["name"];
                $boite_vitesse = $POST["boite_vitesse"];
                $autoradio = $POST["autoradio"];
                $nbr_porte = $POST["nbr_porte"];
                ?>

                </form>
            </div>
            
        </div>
    </section>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script> 
    <script src="js/classie.js"></script>
    <script src="js/gnmenu.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/stellar.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

</body>

</html>

