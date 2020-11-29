<html>
<head>
    <title>Initialisation de la base de données</title>
    <meta charset="utf-8" />
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
include("C:/xampp/Sonia_Abou_projet/Donnees.inc.php");
echo"<ul>";
foreach ($Hierarchie as $item => $value) {


    if (isset($Hierarchie[$item]['sous-categorie'])) {

        $cat= implode(', ',$Hierarchie[$item]['sous-categorie']);
        echo"<li>";
        print_r($cat);
       echo"</li>";
    }
}echo"<ul/>";
?>


</body>
</html>