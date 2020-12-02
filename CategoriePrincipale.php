
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
<h1>
<h1> Les categories principales </h1>
<pre>

<?php

include("C:/xampp/Sonia_Abou_projet/Donnees.inc.php");
//print_r($Hierarchie);

$string="";

foreach ($Hierarchie as $item => $value) {
    // verifie sil a un index supercategorie
    if (isset($Hierarchie[$item]['super-categorie'])){
        // recupere tous les supercategories en String, meme celles qui ont deux supercategorie
        $cat= implode(',',$Hierarchie[$item]['super-categorie']);
        $string .= $cat. ",";}
}
// enlever la derniere virgule
$string=trim($string,',');
// en les transforme
$string=explode(",", $string);
$c=array_unique($string);

// afficher les supercategories
foreach ($c as $value){
    $valeur = str_replace(' ', '_', $value);

   echo"<a href=http://localhost:63343/Sonia_Abou_projet/lesSousCategories.php?categorie=$valeur>$value</a>";
   // ligne ajoute
   echo "<h1>Les recettes fruits <h1/>";

   // acceder aux sous categories et verifiees que ces elements sont dans recettes
/*
    if($Hierarchie[$item]['super-categorie']==$value){
        foreach ($Hierarchie as $item => $value1){
            print_r($value1);
            foreach ($value1["sous-categorie"] as $key => $elemnt){
                foreach($Recettes as $index => $val){
                    if(in_array($elemnt,$val["index"])){
                        echo $val["titre"];
                    }

                }
            }


        }




    }*/



   echo"</br>";
   echo"</br>";


}


/*$cat = $_GET['categorie'];
print_r($cat);*/

?>



</pre>
</body>
</html>