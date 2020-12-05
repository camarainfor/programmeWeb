<?php
session_start();

// la fonction ajouter

     if(!isset($_SESSION["panier"])){
        $_SESSION["panier"]=array();
        $_SESSION["panier"]["recette"]=array();
        $_SESSION["panier"]["qteProduit"]=array();
        $_SESSION["panier"]["verrouillé"]=false;
    }
     $recette = $_POST['recette'];

        $position_produit = array_search($recette,$_SESSION["panier"]["recette"]);
        echo "position donne ".$position_produit;
    // il lon deja rencontre, on increment
        if($position_produit !== false){

            $_SESSION["panier"]["qteProduit"][$position_produit] =  intval($_SESSION["panier"]["qteProduit"][$position_produit]) +1;
        }else{
// on ajoute pour la premiere fois
            array_push($_SESSION["panier"]["recette"],$recette);
            array_push($_SESSION["panier"]["qteProduit"],1);

        }

            echo "<pre>";
            print_r($_SESSION['panier']);
            echo "</pre>";
        echo "ok article ajoute";


?>

