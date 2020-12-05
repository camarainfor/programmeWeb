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
$Supercategorie = $_GET['supercategorie'];
echo"<br/>";
$parametreUrlSuperCategorie = str_replace('_', ' ', $Supercategorie);
echo '<h1>  la liste sous categories principales de : '.$parametreUrlSuperCategorie.'</h1>';
echo"<br/>";


// affiche les index de Hierachies
// les items sont sous categories
foreach ($Hierarchie as $item => $value) {
    // verifie sil a un index supercategorie
    if (isset($Hierarchie[$item]['super-categorie']) && in_array($parametreUrlSuperCategorie, $Hierarchie[$item]['super-categorie'])) {
        $parametreUrlsouscategorie = str_replace(' ', '_', $item);

        //echo $valeur_item;
        echo"<a href=http://localhost:63342/Sonia_Abou_projet/aliment.php?supercategorie=$Supercategorie&souscategorie=$parametreUrlsouscategorie>$item</a>";
        echo"</br>";
        echo"</br>";
        echo"</br>";
    }

}



?>
</body>
</html>