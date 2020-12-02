
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
<html>
<body>
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
//print_r($c);
///
///
//
//        if( isset($_POST['secteur']) && $_POST['secteur']!='default' )
//        {
//
//                        echo "Vous avez choisi <b>".$_POST['secteur']."</b>";
//
//        }
//

echo'<form method="post"><select name="Supercategorie">';
//echo '<option selected="selected"> Choose one Supercategorie</option>';
foreach ($c as $value){

   echo "<option value='strtolower($value)'>$value</option>";

}

echo'</select>';
echo '<select name="souscategorie">';
echo '<option selected="selected"> Choose one Souscathegorie </option>';
foreach ($Hierarchie as $item => $value) {
    foreach ($value as $element=>$derValue){
        foreach ($derValue as $elmnt){
        if($element =='sous-categorie'){
        echo "<option value='strtolower($elmnt)'>$elmnt</option>";
        }}
    }
}

echo'</select>';

echo"</form>";

    ?>




<?php

$Select_name=$_POST["Supercategorie"];

echo $Select_name;

?>

<?php
/*


echo '</br>';
echo '</br>';
echo'</select>';
echo '<select name="souscategorie">';
echo '<option selected="selected"> Choose one Souscathegorie </option>';
echo'<option value="1950">1900-1950</option>';
echo'</select>';
echo '</br>';
echo '</br>';
echo' <button type="submit" name="submit" >Submit</button>
</form>'
*/?>

    <?php






    ?>



</pre>
</body>
</html>