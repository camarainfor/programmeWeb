<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Faites vous plaisir !</title>
  <!--
  Next Level CSS Template
  https://templatemo.com/tm-532-next-level
  -->
  <link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/templatemo-style.css" />
</head>
<body>
<div class="container-fluid">
  <div class="row tm-brand-row">
    <div class="col-lg-4 col-10">
      <div class="tm-brand-container">
        <div class="tm-brand-texts">
          <h1 class="text-uppercase tm-brand-name">Cocktails</h1>
        </div>
      </div>
    </div>
    <div class="col-lg-8 col-2 tm-nav-col">
      <div class="tm-nav">
        <nav class="navbar navbar-expand-lg navbar-light tm-navbar">
          <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarNav"
                  aria-controls="navbarNav"
                  aria-expanded="false"
                  aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto mr-0">
              <li class="nav-item ">
                <div class="tm-nav-link-highlight"></div>
                <a class="nav-link" href="index.php"
                >Accueil <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <div class="tm-nav-link-highlight"></div>
                <a class="nav-link" href="menuCategoriePrincipale.php">Categorie principale</a>
              </li>
              <li class="nav-item">
                <div class="tm-nav-link-highlight"></div>
                <a class="nav-link" href="menuSouscategorie.php">Sous-Categorie </a>
              </li>

              <li class="nav-item active">
                <div class="tm-nav-link-highlight"></div>
                <a class="nav-link" href="#">Aliments </a>
              </li>
              <li class="nav-item">
                <div class="tm-nav-link-highlight"></div>
                <a class="nav-link" href="menuRecettes.php">Recettes </a>
              </li>

                <?php
                session_start();
                if ($_SESSION['connected'] == 1)
                {
                    echo '<li class="nav-item">';
                    echo '<div class="tm-nav-link-highlight"></div>';
                    echo '<a class="nav-link" href="menuSenregistrer.php">Modifier vos Données personnelles</a>';
                    echo '</li>';
                    echo '<li class="nav-item">';
                    echo '<div class="tm-nav-link-highlight"></div>';
                    echo '<a class="nav-link" href="connectionDesactivee.php">Se deconnecter</a>';
                    echo '</li>';
                }
                else {
                    echo '<li class="nav-item">';
                    echo '<div class="tm-nav-link-highlight"></div>';
                    echo '<a class="nav-link" href="menuconnections.php">Connexion</a>';
                    echo '</li>';
                    echo '<li class="nav-item">';
                    echo '<div class="tm-nav-link-highlight"></div>';
                    echo '<a class="nav-link" href="menuSenregistrer.php">Sinscrire</a>';
                    echo '</li>';

                }
                ?>

            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>

  <div class="row tm-welcome-row">
    <div class="col-12 tm-page-cols-container">
      <div class="tm-page-col-left tm-welcome-box tm-bg-primary">
        <p class="tm-welcome-text">
          <em>"Faites vous plaisir dans le monde des cocktails !"</em>
        </p>
      </div>
      <div class="tm-page-col-right">
        <div
                class="tm-welcome-parallax"
                data-parallax="scroll"
                data-image-src="img/recettes4.jpg"
        ></div>
      </div>
    </div>
  </div>



    <section class="row tm-pt-4 tm-pb-6">

        <div class="tm-page-col-right tm-tab-contents">
            <div id="first-tab-group" class="tabgroup">
                <div id="tab1">
                    <div class="text-content">
                        <h3 class="tm-text-secondary tm-mb-5">
                            Les aliments de la sous categorie :
                        </h3>

                        <?php

                        include("C:/xampp/Sonia_Abou_projet/Donnees.inc.php");
                        $supercategorie="";
                        $souscategorie="";
                        $filter=false;

                        // recupere la valeur de url
                        if(isset( $_GET['supercategorie']) && isset( $_GET['souscategorie'])) {
                            $supercategorie = $_GET['supercategorie'];
                            //echo $supercategorie. " ";
                            // les index
                            $souscategorie = $_GET['souscategorie'];
                            $filter = true;
                        }


                        echo "<br/>";
                        $valeursouscategorie = str_replace('_', ' ', $souscategorie);

                        //echo '<h1>  Les aliments  de la sous categorie : ' . $valeursouscategorie . '</h1>';
                        //print_r($cat);
                        echo "<br/>";


                        // affiche les sous de Hierachies

                        foreach ($Hierarchie as $item => $value) {
                            // verifie sil a un index supercategorie

                            if (isset($Hierarchie[$item]['super-categorie']) && (!$filter || in_array($valeursouscategorie, $Hierarchie[$item]['super-categorie']))) {
                                // valeur index

                                //cho  "excellem ".$valeursouscategorie;
                                $valeur_item = str_replace(' ', '_', $item);

                                echo "<a href=http://localhost:63342/Sonia_Abou_projet/pageDaccueil/menuRecettes.php?supercategorie=$supercategorie&souscategorie=$valeursouscategorie&aliment=$valeur_item>$item</a>";
                                echo "</br>";
                                echo "</br>";

                            }


                        }

                        ?>


                    </div>
                </div>




            </div>
        </div>

    </section>



    <!-- row -->

  <!-- Page footer -->
  <footer class="row tm-page-footer">
    <p class="col-12 tm-copyright-text mb-0">
      Copyright &copy; 2020 Camara Aboubacar - Sonia
      <a href="https://www.facebook.com/" rel="nofollow" class="tm-copyright-link">facebook</a>
    </p>
  </footer>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>