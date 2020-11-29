<html>
<head>
    <title>Initialisation de la base de données</title>
    <meta charset="utf-8" />
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
$result ="C:/xampp/temp/FickertPascalProjetWeb/Sonia_Abou_projet/Donnees.inc.php";
include($result);

foreach ($Recettes as $Cocktail)// recettes a un tableau cocktail
{
$titre = $Cocktail["titre"];
$link = str_replace(" ", "_", $titre);
$ingredients =trim($Cocktail["ingredients"]);
//$ingredients = substr($ingredients, 0, -1);
    echo "<ul>";
    echo "<li> titre: <a href = Cocktail.php?Cocktail='$link'/>$titre</a></br>";
    echo "<li>Ingredients: $ingredients</li>";
    echo "</ul>";
}

?>
</body>
</html>
