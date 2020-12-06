<?php

session_start();

//session_destroy();

if(!isset($_SESSION["name_user"])){
    $_SESSION["name_user"] = "inconnu";
}

$user = $_SESSION['name_user'];

echo "user courant : $user";
echo "debut";

if(!isset($_SESSION["panier"])) {
    $_SESSION["panier"] = array();
}

if(!isset($_SESSION["panier"][$user])){
 $_SESSION["panier"][$user] = array(
     "recette" => array(), "qteProduit" => array()
 );

}

/*echo "<pre>";
print_r($_SESSION['panier']);
echo "</pre>";*/
     $recette = $_POST['recette'];

        $position_produit = array_search($recette,$_SESSION["panier"][$user]["recette"]);
        echo "position donne ".$position_produit;
    // il lon deja rencontre, on increment
        if($position_produit !== false){

            $_SESSION["panier"][$user]["qteProduit"][$position_produit] =  intval($_SESSION["panier"][$user]["qteProduit"][$position_produit]) + 1;
        }else{
// on ajoute pour la premiere fois
            array_push($_SESSION["panier"][$user]["recette"],$recette);
            array_push($_SESSION["panier"][$user]["qteProduit"],1);

        }

            echo "<pre>";
            print_r($_SESSION['panier']);
            echo "</pre>";
        echo "ok article ajoute avec success ++";


?>