<?php
session_start();
//session_destroy();
if(!isset($_SESSION["name_user"])){
    $_SESSION["name_user"] = "inconnu";
}

$user = $_SESSION['name_user'];

echo "user courant : $user";
echo "debut";
// si le panier nexiste cree le panier
if(!isset($_SESSION["panier"])) {
    $_SESSION["panier"] = array();
}

//si le panier user nexiste pas cree le panier user
//le panier est cree avec deux clees recttes et quantite
if(!isset($_SESSION["panier"][$user])){
    $_SESSION["panier"][$user] = array(
        "recette" => array(), "qteProduit" => array()
    );

}

// la fonction supprimer

     $recette = $_POST['recette'];

        $position_produit = array_search($recette,$_SESSION["panier"][$user]["recette"]);
        echo "position donne ".$position_produit;
    // il lon deja rencontre, on increment
        if($position_produit !== false){

            $newQte= intval($_SESSION["panier"][$user]["qteProduit"][$position_produit]) - 1;
            if($newQte == 0) {
                unset($_SESSION["panier"][$user]["qteProduit"][$position_produit]);
                unset($_SESSION["panier"][$user]["recette"][$position_produit]);
            }
            else
            $_SESSION["panier"][$user]["qteProduit"][$position_produit] = $newQte;
        }

            echo "<pre>";
            print_r($_SESSION['panier']);
            echo "</pre>";
        echo "ok article ajoute";


?>

