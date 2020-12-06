<!DOCTYPE html>
<?php
session_start();?>
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
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: white;
        }
        /* elemnt select */
        .custom-select {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        input[type=date], input[type=number] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        input[type=email]{
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
        input[type=number]:focus, input[type=email]:focus {
            background-color: #ddd;
            outline: none;
        }
        input[type=date]:focus, input[type=radio]:focus {
            background-color: #ddd;
            outline: none;
        }


        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #1a30dd;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
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
                            <li class="nav-item">
                                <div class="tm-nav-link-highlight"></div>
                                <a class="nav-link" href="menuRecettes.php">Recettes </a>
                            </li>
                            <?php
                            //session_start();
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


    <section class="row tm-pt-4 tm-pb-6">

        <div class="tm-page-col-right tm-tab-contents">
            <div id="first-tab-group" class="tabgroup">
                <div id="tab1">
                    <div class="text-content">
                        <form action="action_inscription.php" method="POST">
                            <div class="container">
                                <h1>S'inscrire</h1>

                                <?php
                                if(isset($_GET['error']))
                                    echo "<h2> informations incorrectes </h2>";
                                ?>

                                <p>Remplissez les champs pour creer votre compte.</p>
                                <hr>

                                <label for="nom"><b>Nom</b></label>
                                <input type="text" placeholder="Entrer votre nom" name="nom" id="nom" required>

                                <label for="prenom"><b>Prenom</b></label>
                                <input type="text" placeholder="Entrer votre prenom" name="prenom" id="prenom" required>
                                <br>
                                <br>
                                <input type="radio" id="male" name="sexe" value="male"
                                       checked>
                                <label for="male">Male</label>

                                <input type="radio" id="female" name="sexe" value="female"
                                       >
                                <label for="female">female</label>

                                <br>
                                <br>

                                <label for="email"><b>Email</b></label>
                                <input type="email" placeholder="Entrer l'email" name="email" id="email" required>

                                <label for="password"><b>Password</b></label>
                                <input type="password" placeholder="Entrer le mot de passe" name="password" id="password" required>

                                <br>
                                <br>
                                <label for="birthday"><b>Birthday</b></label>
                                <input type="date" placeholder="date de naissance" name="birthday" id="birthday" required>
                                <br>
                                <br>
                                <label for="codepostal"><b>code postal</b></label>
                                <input type="number" placeholder="code postal" name="codepostal" id="codepostal" required>
                                <br>
                                <br>
                                <div class="custom-select">
                                    <label for=" Ville"><b> Ville</b></label>
                                    <select>
                                        <option value="Allemagne">Allemagne</option>
                                        <option value="France">France</option>
                                        <option value="Guinee">Guinee</option>
                                        <option value="Chine">Chine</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Siguiri">Siguiri</option>
                                        <option value="Kankan">Kankan</option>
                                    </select>
                                </div>
                                <br>
                                <br>
                                <label for="phone"><b>Phone</b></label>
                                <input type="number" placeholder="telephone" name="phone" id="phone" required>

                                <br>
                                <br>


                                <hr>
                                <p>En creant votre compte vous acceptez les termes du contrat <a href="#">Termes & Contrats</a>.</p>

                                <button type="submit" class="registerbtn">S'inscrire</button>
                            </div>

                            <div class="container signin">
                                <p>Avez vous deja un compte? <a href="connection.php">Connectez-vous</a>.</p>
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
            <a href="https://www.facebook.com/" rel="nofollow" class="tm-copyright-link"> facebook</a>
        </p>
    </footer>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>