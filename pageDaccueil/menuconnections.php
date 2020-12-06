<!DOCTYPE html>
<?php
session_start();
?>
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
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box}

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for all buttons */
        button {
            background-color: #1a30dd;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity:1;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn, .signupbtn {
            float: left;
            width: 50%;
        }

        /* Add padding to container elements */
        .container {
            padding: 16px;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
            .cancelbtn, .signupbtn {
                width: 100%;
            }
        }
    </style>
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
              <li class="nav-item a">
                <div class="tm-nav-link-highlight"></div>
                <a class="nav-link" href="index.php"
                >Accueil <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <div class="tm-nav-link-highlight"></div>
                <a class="nav-link" href="menuRecettes.php">Categorie principale</a>
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
              <li class="nav-item active">
                <div class="tm-nav-link-highlight"></div>
                  <a class="nav-link" href="#">Connexion</a>
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
                data-image-src="img/recettes9.jpg"
        ></div>
      </div>
    </div>
  </div>





    <section class="row tm-pt-4 tm-pb-6">

        <div class="tm-page-col-right tm-tab-contents">
            <div id="first-tab-group" class="tabgroup">
                <div id="tab1">
                    <div class="text-content">

                        <form action="action_page.php" method="POST" style="border:1px solid #ccc">
                            <div class="container">
                                <h1>Connectez-vous</h1>
                                <?php
                                if(isset($_GET['error']))
                                    echo "<h2 style='color:red'> informations incorrectes </h2>";
                                    /*echo "<pre>";
                                    print_r($_SESSION['access']);
                                    echo "</pre>";*/
                                ?>
                                <p>Remplissez les champs suivants pour vous connectez.</p>
                                <hr>

                                <label for="email"><b>Email</b></label>
                                <input type="text" placeholder="Entrer votre email" name="email" required>

                                <label for="psw"><b>Mot de passe</b></label>
                                <input type="password" placeholder="Entrer  votre mot de passe" name="psw" required>





                                <div class="clearfix">
                                    <button type="button" class="cancelbtn">Annuler</button>
                                    <button type="submit" name="Submit"  class="signupbtn">Se connecter</button>
                                </div>
                            </div>
                        </form>



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