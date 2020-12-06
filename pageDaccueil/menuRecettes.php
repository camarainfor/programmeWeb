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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<div class="container-fluid">
  <div class="row tm-brand-row">
    <div class="col-lg-4 col-10">
      <div class="tm-brand-container">
        <div class="tm-brand-texts">
          <h1 class="text-uppercase tm-brand-name"> Cocktails</h1>
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

              <li class="nav-item">
                <div class="tm-nav-link-highlight"></div>
                <a class="nav-link" href="menuAliments.php">Aliments </a>
              </li>
              <li class="nav-item active">
                <div class="tm-nav-link-highlight"></div>
                <a class="nav-link" href="#">Recettes </a>
              </li>
              <li class="nav-item">
                <div class="tm-nav-link-highlight"></div>
                <a class="nav-link" href="menuconnections.php">Connexion</a>
              </li>
              <li class="nav-item">
                <div class="tm-nav-link-highlight"></div>
                <a class="nav-link" href="menuSenregistrer.php">S'inscrire</a>
              </li>

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
                data-image-src="img/recettes7.jpg"
        ></div>
      </div>
    </div>
  </div>

    <?php
    session_start();
    function transformTitle($titre){
        $name=ucfirst(strtolower(skip_accents( $titre, $charset='utf-8')));
        $name=str_replace(' ', '_', $name);
        return $name;
    }
    transformTitle("AB i");
    ?>


    <?php

    function skip_accents( $str, $charset='utf-8' ) {

        $str = htmlentities( $str, ENT_NOQUOTES, $charset );

        $str = preg_replace( '#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str );
        $str = preg_replace( '#&([A-za-z]{2})(?:lig);#', '\1', $str );
        $str = preg_replace( '#&[^;]+;#', '', $str );

        return $str;
    }?>

    <section class="row tm-pt-4 tm-pb-6">

        <div class="tm-page-col-right tm-tab-contents">
            <div id="first-tab-group" class="tabgroup">
                <div id="tab1">
                    <div class="text-content">
                        <h3 class="tm-text-secondary tm-mb-5">
                            Les recettes
                        </h3>

                        <?php


                        include("C:/xampp/Sonia_Abou_projet/Donnees.inc.php");
                        $souscategorie="";
                        $supercategorie="";
                        $ingredient="";
                        $filter = false;

                        if(isset($_GET['supercategorie']) && $_GET['souscategorie'] && $_GET['aliment']) {
                            $souscategorie = trim(mb_strtolower($_GET['souscategorie']));
                            $supercategorie = trim(mb_strtolower($_GET['supercategorie']));
                            $ingredient = trim(mb_strtolower($_GET['aliment']));
                            //echo "cat donne $cat";
                            //echo "aliment donne $cat1";
                            $supercategorie = str_replace('_', ' ', $supercategorie);
                            $souscategorie = str_replace('_', ' ', $souscategorie);
                            $filter = true;
                        }

                        echo "<br />";


                        echo "<p>";
                        /*echo "<h2>AFFICHER LE PANIER (Recettes choisies)</h2>";*/
                        //echo "";

                        echo "<h1 style='position: relative'><a href=http://localhost:63342/Sonia_Abou_projet/pageDaccueil/Panier.php><img src='../Photos/corbeille1.png' style='position: absolute  left:500px top:1000px' alt='' width='200'height='160'></a></h1>";
                        echo "</p>";
                        echo "<br /> <br />";
                        foreach ($Recettes as $item => $value) {


                            if ( isset($Recettes[$item]['ingredients'])) {


                                $positionSouscategorie = strrpos(trim(strtolower($Recettes[$item]['ingredients'])),$souscategorie);
                                $positionSupercategorie = strrpos(trim(strtolower($Recettes[$item]['ingredients'])),$supercategorie);
                                $positionAliment = strrpos(trim(strtolower($Recettes[$item]['ingredients'])),$ingredient);

                                if (!$filter || ($positionSouscategorie !==false || $positionSouscategorie!==false || $positionAliment!==false)) {


                                    $title=$Recettes[$item]['titre'];
                                    //echo "voila le nom avec accent ".$title;
                                    $imgTitle=(transformTitle($title).".jpg");
                                    //echo "voila le nom sans ".$imgTitle;
                                    $recetteTitle="'".transformTitle($title)."'";
                                    echo $title;
                                    ///$ajouter = add_recette."('".$recetteTitle."')";
                                    $ajouter='';
                                    echo " <button type='button' id='erechnen' onClick=add_recette($recetteTitle)>ajouter au panier </button>";




                                    // echo "resultat donne".$imgTitle; echo "<br />";
                                    $file="../Photos/".$imgTitle;
                                    echo "<br />";
                                    if (file_exists ($file ))
                                    echo "<img src=".$file." alt='' width='50'height='60'>";
                                    else
                                        echo "<img src=../Photos/defaultimage.jpg alt='' width='50'height='60'>";


                                    echo "<br />";
                                }


                            }

                        }
                        echo "<br />";


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