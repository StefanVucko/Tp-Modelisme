<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>PHP</title>

    <link rel="stylesheet" href="css/style.css">

    <!-- cdn bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!--cdn Fontawesome pour les icones  -->
    <link rel="stylesheet" href="css/fontawesome/css/all.css">

    <!-- JS -->
    <script src="js/main.js" defer></script>

</head>
<div class="fond">
<body class="w-100 p-0 m-0">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-custom py-0 m-0 ">
            <a class="navbar-brand" href="index.php"><img src="images/logo/logo.jpg" alt="logo" class="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" style="color:goldenrod" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:goldenrod" href="addBons.php">Bon de Commande</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:goldenrod" href="commandes.php">Liste de Commandes</a>
                    </li>
                </ul>
            </div>  
        </nav>
    </header>
    <main class="m-0 p-0">
        <?php include $template.".php"; ?>
    </main>
    <br/><br/><br/><br/><br/><br/>
        <!-- Footer -->
    <footer class="page-footer font-small mdb-color lighten-3 pt-4">

    <!-- Footer Elements -->
    <div class="container">

    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view zoom z-depth-1-half">
            <img src="./images/theme/image1.jpg" class="img-fluid"
            alt="">
            <a href="#">
            <div class="mask rgba-white-light"></div>
            </a>
        </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view zoom z-depth-1-half">
            <img src="./images/theme/image5.jpg" class="img-fluid"
            alt="">
            <a href="#">
            <div class="mask rgba-white-light"></div>
            </a>
        </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view zoom z-depth-1-half">
            <img src="./images/theme/image2.jpg" class="img-fluid"
            alt="">
            <a href="#">
            <div class="mask rgba-white-light"></div>
            </a>
        </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-12 mb-4">

        <!--Image-->
        <div class="view zoom z-depth-1-half">
            <img src="./images/theme/image6.jpg" class="img-fluid"
            alt="">
            <a href="#">
            <div class="mask rgba-white-light"></div>
            </a>
        </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view zoom z-depth-1-half">
            <img src="./images/theme/image4.jpg" class="img-fluid"
            alt="">
            <a href="#">
            <div class="mask rgba-white-light"></div>
            </a>
        </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-2 col-md-6 mb-4">

        <!--Image-->
        <div class="view zoom z-depth-1-half">
            <img src="./images/theme/image3.jpg" class="img-fluid"
            alt="">
            <a href="#">
            <div class="mask rgba-white-light"></div>
            </a>
        </div>

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

    </div>
    <!-- Footer Elements -->

<!-- Copyright -->
<hr class="mt-3 mb-2" style="background-color: white;">
        <div class="text-center py-3 mb-0 text-white">
            <small style="color:goldenrod">© 2020 - Modelisme. Copyright</small>
        </div>
<!-- Copyright -->

</footer>
<!-- Footer -->

    <!-- cdn bootstrap js jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</div>
</html>