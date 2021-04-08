<!DOCTYPE html>
<html lang="en">

<?php include "inc/header.php" ?>

<!----- Breadcrumb of Header -------->
    <div class="container pt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-2 bg-dark">
            <li class="breadcrumb-item active"><a class="text-decoration-none" href="index.php">Accueil</a></li>
            <li class="breadcrumb-item active text-muted" aria-current="page">Fil d'actualités</li>
        </ol>
    </nav>
    </div>
<!----- End of Header -------->

<!----- Start of our main container -------->
    <div class="container">
        <div class="main">
            <div class="py-1 text-center mt-3 mb-3">
                <h2>COVID-19</h2>
                <p class="lead">" Protéger tous les élèves et les adultes et assurer l'éducation pour tous "</p>
                <P>La  situation  sanitaire rend  nécessaire une vigilance  constante face  à  un  risque  épidémique  élevé, comme en témoignent le niveau de circulation important du virus sur le territoire ainsi que l’apparition de nouveaux variants.</P>
            </div>

            <hr class="my-4">

<?php include "inc/sidebar.php" ?>

<!----- Our main content -------->
                  <div class="col-md-8 col-lg-9 bg-light">
                        <h4 class="mb-0 pt-3 text-muted">Fil d'actualités</h4>
                        <div class="row g-3">

                            <table class="table table-hover table-striped table-Secondary mt-4">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Régie</th>
                                    <th scope="col">Période</th>
                                    <th scope="col">Etat</th>
                                    <th scope="col">Reste à payer</th>
                                    <th scope="col">Montant</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Facture</td>
                                        <td>Rest-scolaire 100-24</td>
                                        <td>Mars</td>
                                        <td>Non payer</td>
                                        <td>84,92 €</td>
                                        <td>0,00 €</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Facture</td>
                                        <td>Rest-scolaire 100-24</td>
                                        <td>Février</td>
                                        <td>Payée</td>
                                        <td>0,00 €</td>
                                        <td>53,00 €</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Facture</td>
                                        <td>Rest-scolaire 100-24</td>
                                        <td>Janvier</td>
                                        <td>Payée</td>
                                        <td>0,00 €</td>
                                        <td>53,00 €</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Facture</td>
                                        <td>Rest-scolaire 100-24</td>
                                        <td>Décembre 2020</td>
                                        <td>Payée</td>
                                        <td>0,00 €</td>
                                        <td>53,00 €</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                  </div>
<!----- Our main content -------->

              </div>
        </div>
    </div>
<!----- End of our main container -------->

<!----- Our Footer -------->
<?php include "inc/footer.php" ?>
