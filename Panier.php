<!Doctype html>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./script.js"></script>

    <style>


    </style>
</head>
<html>
<body>
<pre>
<?php

session_start();

$panier = $_SESSION["panier"]['recette'];

$quantite = $_SESSION["panier"]["qteProduit"];

$total = count($panier);
// affiche le test si le panier est vide
if ($total == 0) {
    echo "votre panier est vide";
}
else {

// affiche le contenu du panier
$qte = 0;
foreach ($panier as $item => $value) {
    echo $value . " : ";
    echo $quantite[$item];
    $argument = "'" . $value . "'";
    echo " <button type='button' id='erechnen' onClick=diminuer_qte($argument)>diminuer la quantite </button>";
    echo "<br />";
}


}

?>
</pre>

</body>
</html>