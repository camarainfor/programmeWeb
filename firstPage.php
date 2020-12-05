<html>
<head>
    <title>Initialisation de la base de données</title>
    <meta charset="utf-8" />
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
function SousCathegorie($supercategorie){

include("C:/xampp/Sonia_Abou_projet/Donnees.inc.php");

foreach ($Hierarchie as $item => $value) {

  if(isset($Hierarchie[$item]['super-categorie']) And isset($Hierarchie[$item]['sous-categorie']) And in_array($supercategorie, $Hierarchie[$item]['super-categorie'][0])){
 //print_r($Hierarchie[$item]['super-categorie']);
      $show= implode(', ',$Hierarchie[$item]['sous-categorie']);
      echo"<li>";
      print_r($show);
      echo"</li>";
    }
}


}
?>
<?php
include("C:/xampp/Sonia_Abou_projet/essai1.php");
SousCathegorie($Supercategorie);


?>

</body>
</html>