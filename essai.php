<!Doctype html>
<html>
<head>
    <title>Initialisation de la base de données</title>
    <meta charset="utf-8" />
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div id="mo_header">
    <div id="mo_site_title">Bienvenue dans le monde de <span>Cocktails ?</span></div>
    <div id="mo_site_slogan">Savourez les meilleurs recettes de Cocktail sur notre site</div>
</div>
<div class="mo_menu">
    <ul>
        <li><a href="essai.php" class="current">Home</a></li>
        <!-- Si il est connecté ou vient de s'inscrire, afficher le lien vers la recherche par ingredient -->
        <?php if((isset($_SESSION['connecte']) && $_SESSION['connecte']) ||
            isset($_SESSION['compte_cree']) && $_SESSION['compte_cree']){
            echo'<li><a href="recherche.php">Recherche</a></li>';
        }?>

    </ul>
</div>
<div id="mo_container">
    <h1 align="center">Bar à Cocktails</h1>

    <main>

    </main>


</div>

</body>
</html>