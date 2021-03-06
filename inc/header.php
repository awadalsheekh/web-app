<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portail Famille</title>
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>

<!----- Start of Header -------->

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="#" class="navbar-brand"></a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="nav col-md-6 col-sm-12 col-lg-auto me-lg-auto mb-2 mb-md-0 justify-content-center">
            <li><a href="index.php" class="nav-link px-2 link-light">Accueil</a></li>
            <li><a href="blog.php" class="nav-link px-2 link-light">Blog</a></li>
            <li><a href="a-propos.php" class="nav-link px-2 link-light">À propos</a></li>
        </ul>

        <div class="col-md-6 col-sm-12 col-lg-auto navicon d-flex justify-content-center">
            <span><a href="#"><i class="fas fa-comments fa-2x pl-2 text-secondary"></i></a></span>
            <span><a href="#"><i class="fas fa-cog fa-2x pl-2 text-secondary"></i></a></span>
            <span><a href="#"><i class="fas fa-power-off fa-2x pl-2 text-secondary"></i></a></span>

        </div>

    </div>
</nav>

<!----- Title of Header -------->
    <header-title class="">
        <div class="container header-title mt-2"> <!--"Header-title" Additional style -->
            <div class="row">
                <div class="col">
                    <div class="logo bg-light p-1">
                        <h1><i class="fab fa-accusoft text-primary "></i>
                            <span class="logo-title text-primary">Portail Famille</span> <!--"log-title" Additional style -->
                            <span class="fst-italic title-italic-font">Gérer toutes vos démarches simple et rapide </span> <!--"title-italic-font" Additional style -->
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header-title>

<!----- Start of information cards -------->
<div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fa fa-user-graduate fa-4x"></i>
                            </div>
                            <div class="col">
                                <h3 class="display-3">623</h3>
                                <h6>Étudiants</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="text-primary" href="#">Voir les détails <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header bg-success text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fa fa-star fa-4x"></i>
                            </div>
                            <div class="col">
                                <h3 class="display-3">56</h3>
                                <h6>Activités</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="text-success" href="#">Voir les détails <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header bg-warning text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fa fa-chart-line fa-4x"></i>
                            </div>
                            <div class="col">
                                <h3 class="display-3">92%</h3>
                                <h6>Réussites</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="text-warning" href="#">Voir les détails <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-header bg-danger text-white">
                        <div class="row align-items-center">
                            <div class="col">
                                <i class="fa fa-users fa-4x"></i>
                            </div>
                            <div class="col">
                                <h3 class="display-3">324</h3>
                                <h6>Utilisateurs</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a class="text-danger" href="#">Voir les détails <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!----- End of information cards -------->
