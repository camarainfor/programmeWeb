
<!Doctype html>
<html>
<body>
<pre>

<?php
//afficher les supercategories
//afficher les sous categories
// affiches les aliments
//


function SousCathegorie($supercategorie)
{

    include("C:/xampp/Sonia_Abou_projet/Donnees.inc.php");

    foreach ($Hierarchie as $item => $value) {

        if (isset($Hierarchie[$item]['super-categorie']) and isset($Hierarchie[$item]['sous-categorie']) and in_array($supercategorie, $Hierarchie[$item]['super-categorie'])) {
            //print_r($Hierarchie[$item]['super-categorie']);
            $show = implode(', ', $Hierarchie[$item]['sous-categorie']);
            echo "<li>";
            print_r($show);
            echo "</li>";
        }
    }


}


include("C:/xampp/Sonia_Abou_projet/Donnees.inc.php");

echo("les supergaterories \n ");
echo"<ul>";

$new_Array=["a"];
foreach ($Hierarchie as $item => $value) {


    if (isset($Hierarchie[$item]['super-categorie'])){


 $cat= implode(', ',$Hierarchie[$item]['super-categorie']);
    if(!in_array($cat,$new_Array,true)){
        //print_r($new_Array);
        array_push($new_Array,$cat);
        echo"<li>"."<a href='firstPage.php'>";
        echo $cat ."</a>";
        SousCathegorie($cat);

        echo"</li>";

    }
   // $toString = array_unique($Hierarchie[$item]['super-categorie']);


}
}
echo"</ul>";

?>
</pre>
</body>
</html>