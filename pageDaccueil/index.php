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
              <li class="nav-item active">
                <div class="tm-nav-link-highlight"></div>
                <a class="nav-link" href="#"
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
                data-image-src="img/recettes1.jpg"
        ></div>
      </div>
    </div>
  </div>




  <!-- row -->
    <section class="row tm-pt-4 tm-pb-6">

        <div class="tm-page-col-right tm-tab-contents">
            <div id="first-tab-group" class="tabgroup">
                <div id="tab1">
                    <div class="text-content">
                        <?php
                        if ($_SESSION['connected'] == 1)
                        {
                        echo '<form method="GET">';
                        echo '<input type="search" name="q" placeholder="Recherche..." />';
                        echo '<input type="submit" value="Valider" />';
                        echo'</form>';
                        }
                        else{

                            echo'<h3 class="tm-text-secondary tm-mb-5">';
                            echo 'prenez quelques minutes , pour  savourez ';
                            echo 'les differenes recettes sur notre page.';
                            echo 'Dans le lot des recettes vous avez droit à toutes les  ';
                            echo' saveurs internationales . Elles sont representées dans la rubrique Aliments   ';
                            echo'</h3>';



                        }




                        ?>
                    </div>
                </div>
            </div>
        </div>

    </section>























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