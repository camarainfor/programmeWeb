<!Doctype html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./script.js"></script>
</head>
<body>
<pre>
<?php
session_start();
function transformTitle($titre){
    $name=ucfirst(strtolower($titre));
    $name=str_replace(' ', '_', $name);
    return $name;
}
transformTitle("AB i");
?>

<?php

include("C:/xampp/Sonia_Abou_projet/Donnees.inc.php");
$souscategorie = trim(mb_strtolower($_GET['souscategorie']));
$supercategorie = trim(mb_strtolower($_GET['supercategorie']));
$ingredient = trim(mb_strtolower($_GET['aliment']));
//echo "cat donne $cat";
//echo "aliment donne $cat1";
$supercategorie =  str_replace('_', ' ', $supercategorie);
$souscategorie =  str_replace('_', ' ', $souscategorie);

echo "<br />";



echo "<h1>PANIER</h1> <br />";
echo "<a href=http://localhost:63342/Sonia_Abou_projet/Panier.php>Panier</a>";
echo "<br /> <br />";
foreach ($Recettes as $item => $value) {


    if ( isset($Recettes[$item]['ingredients'])) {


        $positionSouscategorie = strrpos(trim(strtolower($Recettes[$item]['ingredients'])),$souscategorie);
        $positionSupercategorie = strrpos(trim(strtolower($Recettes[$item]['ingredients'])),$supercategorie);
        $positionAliment = strrpos(trim(strtolower($Recettes[$item]['ingredients'])),$ingredient);

        if ($positionSouscategorie !==false || $positionSouscategorie!==false || $positionAliment!==false) {
          

            $title=$Recettes[$item]['titre'];
            $imgTitle=transformTitle($title).".jpg";
            $recetteTitle="'".transformTitle($title)."'";
            echo $title;
            ///$ajouter = add_recette."('".$recetteTitle."')";
            $ajouter='';
            echo " <button type='button' id='erechnen' onClick=add_recette($recetteTitle)>ajouter au panier </button>";




           // echo "resultat donne".$imgTitle; echo "<br />";
            $file="Photos/".$imgTitle;
            echo "<br />";
            echo "<img src=".$file." alt='' width='50'height='60'>";


            echo "<br />";
        }


    }

}
echo "<br />";


?>
</pre>

</body>
</html>