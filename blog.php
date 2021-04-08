<!DOCTYPE html>
<html lang="fr">

<?php include "inc/header.php" ?>
<!----- Breadcrumb of Header -------->
    <div class="container pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-2 bg-dark">
            <li class="breadcrumb-item active"><a class="text-decoration-none" href="index.php">Accueil</a></li>
            <li class="breadcrumb-item active text-secondary" aria-current="page">Blog</li>
        </ol>
    </nav>
    </div>
<!----- End of Header -------->

    <div class="container">
        <div class="main">
        <div class="py-1 text-center mt-3 mb-3">
                <h2>COVID-19</h2>
                <p class="lead">" Protéger tous les élèves et les adultes et assurer l'éducation pour tous "</p>
                <P>La  situation  sanitaire rend  nécessaire une vigilance  constante face  à  un  risque  épidémique  élevé, comme en témoignent le niveau de circulation important du virus sur le territoire ainsi que l’apparition de nouveaux variants.</P>
            </div>
            <hr class="my-4">

              <div class="row g-5">

                  <div class="col-md-5 col-lg-4 order-md-last order-2  bg-light">

                      <h4 class="d-flex justify-content-between align-item-center mb-3">
                          <span class="text-dark ml-2">Catégories</span>
                          <span class="badge bg-primary rounded-pill"></span>
                      </h4>

                      <ul class="list-group mb-3 li-additional-style"> <!--"li-additional-style" Additional style class -->
                          <li class="list-group-item d-flex justify-content-between lh-md">
                            <div class=""><a class="item-link" href="#">Éducation</a></div>
                              <span class="badge bg-secondary rounded-pill">1</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-md ">
                            <div><a class="item-link" href="#">Bibliothèque</a></div>
                              <span class="badge bg-secondary rounded-pill">1</span>
                          </li>
                      </ul>
                      <h4 class="d-flex justify-content-between align-item-center mb-3">
                          <span class="text-dark ml-2">Autre</span>
                          <span class="badge bg-primary rounded-pill"></span>
                      </h4>
                      <ul class="list-group mb-3 li-additional-style"> <!--"li-additional-style" Additional style class -->
                          <li class="list-group-item d-flex justify-content-between lh-md">
                            <div><a class="item-link" href="#">Sécurité</a></div>
                              <span class="badge bg-info rounded-pill">1</span>
                          </li>
                      </ul>
                  </div> <!----- End of sidebar-->

                  <div class="col-md-7 col-lg-8 bg-light">
                      <h4 class="mb-3">Dernières articles</h4>
                      <hr class="my-4">
                        <div class="row g-3">
                            <div class="col-sm-4">
                                <a href="#"><img src="img/security.jpg" class="img-fluid" alt="security"></a>
                            </div>
                            <div class="col-sm-8">
                                <h3 class="card-title">La sécurité</h3>
                                <a href="#" class="text-decoration-none text-muted"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem corporis est eligendi excepturi, quod eaque earum?</p></a>
                            </div>
                            <div class="col-sm-4">
                            <a href="#"><img src="img/edu03.jpg" class="img-fluid" alt="security"></a>
                            </div>
                            <div class="col-sm-8">
                                <h3 class="card-title">La éducation des nos enfants</h3>
                                <a href="#" class="text-decoration-none text-muted"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem corporis est eligendi excepturi, quod eaque earum?</p></a>
                            </div>
                            <div class="col-sm-4">
                            <a href="#"><img src="img/edu01.jpg" class="img-fluid" alt="security"></a>
                            </div>
                            <div class="col-sm-8 mb-5">
                                <h3 class="card-title">Partagez vos collections numérisées</h3>
                                <a href="#" class="text-decoration-none text-muted"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem corporis est eligendi excepturi, quod eaque earum?</p></a>
                            </div>
                        </div>
                  </div>
              </div>
        </div>
    </div>

<!----- Footer ---------->
<?php include "inc/footer.php" ?>
