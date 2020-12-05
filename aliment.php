<!Doctype html>
<head>

    <style>


    </style>
</head>
<html>
<body>
<pre>
<?php

include("C:/xampp/Sonia_Abou_projet/Donnees.inc.php");
// recupere la valeur de url
$supercategorie = $_GET['supercategorie'];
echo $supercategorie. " ";
// les index
$souscategorie =  $_GET['souscategorie'];
echo $souscategorie;

echo "<br/>";
$valeursouscategorie = str_replace('_', ' ', $souscategorie);

echo '<h1>  lLes aliments  de la sous categorie : ' . $valeursouscategorie . '</h1>';
//print_r($cat);
echo "<br/>";


// affiche les sous de Hierachies

foreach ($Hierarchie as $item => $value) {
    // verifie sil a un index supercategorie

    if (isset($Hierarchie[$item]['super-categorie']) && in_array($valeursouscategorie, $Hierarchie[$item]['super-categorie'])) {
        // valeur index

        //cho  "excellem ".$valeursouscategorie;
        $valeur_item = str_replace(' ', '_', $item);

        echo "<a href=http://localhost:63342/Sonia_Abou_projet/Recettes.php?supercategorie=$supercategorie&souscategorie=$valeursouscategorie&aliment=$valeur_item>$item</a>";
        echo "</br>";
        echo "</br>";
        echo "</br>";
    }


}

?>
</pre>

</body>
</html>