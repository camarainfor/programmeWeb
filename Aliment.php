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
$cat = $_GET['categorie'];
$cat2 =  $_GET['aliment'];
echo "<br/>";
$valeur = str_replace('_', ' ', $cat2);
echo '<h1>  Les  sous categories principales de : ' . $valeur . '</h1>';
//print_r($cat);
echo "<br/>";


// affiche les index de Hierachies
foreach ($Hierarchie as $item => $value) {
    // verifie sil a un index supercategorie
    if (isset($Hierarchie[$item]['super-categorie']) && in_array($valeur, $Hierarchie[$item]['super-categorie'])) {
        $valeur_item = str_replace(' ', '_', $item);

        //echo $valeur_item;
        echo "<a href=http://localhost:63342/Sonia_Abou_projet/Recettes.php?categorie=$cat&aliment=$valeur_item&ingredient=$valeur>$item</a>";
        echo "</br>";
        echo "</br>";
        echo "</br>";
    }

}

?>
</pre>

</body>
</html>