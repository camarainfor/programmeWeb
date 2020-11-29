
<!Doctype html>
<html>
<body>
<pre>

<?php
//afficher les supercategories
//afficher les sous categories
// affiches les aliments
//


include("C:/xampp/Sonia_Abou_projet/Donnees.inc.php");
//print_r($Hierarchie);


echo("les supergaterories \n ");
echo"<ul>";
//$Hierarchie=array_unique();
$new_Array=["a"];
foreach ($Hierarchie as $item => $value) {


    if (isset($Hierarchie[$item]['super-categorie'])){


 $cat= implode(', ',$Hierarchie[$item]['super-categorie']);
    if(!in_array($cat,$new_Array,true)){
        //print_r($new_Array);
        array_push($new_Array,$cat);
        echo"<li>"."<a href='#'>";
        echo $cat ."</a>";
        //print_r($Hierarchie[$item]['super-categorie']);
        //print_r($toString);
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