
<!Doctype html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
    <style>
        /* unvisited link */
        a:link {
            color: black;
        }

        /* visited link */
        a:visited {
            color: green;
        }

        /* mouse over link */
        a:hover {
            color: hotpink;
        }

        /* selected link */
        a:active {
            color: blue;
        }
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }

    </style>


</head>
<h1> Les categories principales </h1>
<pre>

<?php

include("C:/xampp/Sonia_Abou_projet/Donnees.inc.php");
//print_r($Hierarchie);

$elementsSupercategorie="";

foreach ($Hierarchie as $item => $value) {
    // verifie sil a un index supercategorie
    if (isset($Hierarchie[$item]['super-categorie'])){
        // recupere tous les supercategories en String, meme celles qui ont deux supercategorie
        $implodeSuperCategorie= implode(',',$Hierarchie[$item]['super-categorie']);
        $elementsSupercategorie .= $implodeSuperCategorie. ",";}
}
// enlever la derniere virgule
$elementsSupercategorie=trim($elementsSupercategorie,',');
// en les transforme
$elementsSupercategorie=explode(",", $elementsSupercategorie);
$Supercategorie=array_unique($elementsSupercategorie);

// afficher les supercategories
foreach ($Supercategorie as $value){
    $valeur = str_replace(' ', '_', $value);

   echo"<a href=http://localhost:63342/Sonia_Abou_projet/souscategorie.php?supercategorie=$valeur>$value</a>";



   echo"</br>";
   echo"</br>";


}


?>



</pre>
</body>
</html>