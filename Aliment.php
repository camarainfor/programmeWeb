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
$cat1 = $_GET['aliment'];

$cat1 =  str_replace('_', ' ', $cat1);

echo "<br />";
// affiche les sous categories
foreach ($Hierarchie as $item => $value) {

    //echo $item;
    //echo '<br />';
    //if ( isset($Hierarchie[$item]['sous-categorie']) && in_array($cat1, $Hierarchie[$item]['sous-categorie'])){
        if ( isset($Hierarchie[$item]['sous-categorie']) && ($cat1 == $item)){
            foreach($value['sous-categorie'] as $key => $value)
            { // echo $item;
                echo "<a href='#' >$value</a>";
                echo "</br>";
                echo "</br>";


            }


            }
        }
        echo "<br />";


?>
</pre>

</body>
</html>