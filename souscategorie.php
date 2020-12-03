<!Doctype html>
<head>

    <style>


    </style>
</head>

<body>
<h1> Les  categories principales </h1>
<?php
include("C:/xampp/Sonia_Abou_projet/Donnees.inc.php");
// recupere la valeur de url
$cat = $_GET['categorie'];
echo"<br/>";
$valeur = str_replace('_', ' ', $cat);
echo '<h1>  Les  sous categories principales de : '.$valeur.'</h1>';
//print_r($cat);
echo"<br/>";


// affiche les index de Hierachies
foreach ($Hierarchie as $item => $value) {
    // verifie sil a un index supercategorie
    if (isset($Hierarchie[$item]['super-categorie']) && in_array($valeur, $Hierarchie[$item]['super-categorie'])) {
        $valeur_item = str_replace(' ', '_', $item);

        //echo $valeur_item;
        echo"<a href=http://localhost:63342/Sonia_Abou_projet/Aliment.php?categorie=$cat&aliment=$valeur_item>$item</a>";
        echo"</br>";
        echo"</br>";
        echo"</br>";
    }

}



/*foreach ($Hierarchie as $item => $value) {
    // verifie sil a un index supercategorie
    if (isset($Hierarchie[$item]['super-categorie']) && in_array($cat, $Hierarchie[$item]['super-categorie']) ) {
       if(isset($value['sous-categorie'])){
        foreach($value['sous-categorie'] as $key => $value)
        {

            $valeur = str_replace(' ', '_', $value);

            echo"<a href=http://localhost:63343/Sonia_Abou_projet/Aliment.php?aliment=$valeur>$value</a>";
            echo"</br>";
            echo"</br>";

        }
       }
        echo "<br />";
    }
}*/


?>
</body>
</html>