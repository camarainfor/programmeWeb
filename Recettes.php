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
$cat1 = trim(strtolower($_GET['aliment']));
$cat = trim(strtolower($_GET['categorie']));
$ingredient = trim(strtolower($_GET['ingredient']));
//echo "cat donne $cat";
//echo "aliment donne $cat1";
$cat1 =  str_replace('_', ' ', $cat1);

echo "<br />";
// affiche les sous categories
foreach ($Recettes as $item => $value) {

    //echo $item;
    //echo '<br />';
    //if ( isset($Hierarchie[$item]['sous-categorie']) && in_array($cat1, $Hierarchie[$item]['sous-categorie'])){
    if ( isset($Recettes[$item]['ingredients'])) {
        // print_r($Recettes[$item]['titre']);

        $positionCat1 = strrpos(trim(strtolower($Recettes[$item]['ingredients'])),$cat1);
        $positionCat = strrpos(trim(strtolower($Recettes[$item]['ingredients'])),$cat);
        $positionIng = strrpos(trim(strtolower($Recettes[$item]['ingredients'])),$ingredient);

        //echo "positions ".$positionCat1. " ".$positionCat;

// a modifie
        if ($positionCat1 !==false || $positionCat1!==false || $positionIng!==false) {
           // echo "cas trouve ".$Recettes[$item]['titre'].$Recettes[$item]['ingredients'];
            echo $Recettes[$item]['titre'];
            echo "<br />";
        }


    }
}
echo "<br />";


?>
</pre>

</body>
</html>