<?php
session_start();

// la fonction supprimer

     $recette = $_POST['recette'];

        $position_produit = array_search($recette,$_SESSION["panier"]["recette"]);
        echo "position donne ".$position_produit;
    // il lon deja rencontre, on increment
        if($position_produit !== false){

            $newQte= intval($_SESSION["panier"]["qteProduit"][$position_produit]) - 1;
            if($newQte == 0) {
                unset($_SESSION["panier"]["qteProduit"][$position_produit]);
                unset($_SESSION["panier"]["recette"][$position_produit]);
            }
            else
            $_SESSION["panier"]["qteProduit"][$position_produit] = $newQte;
        }

            echo "<pre>";
            print_r($_SESSION['panier']);
            echo "</pre>";
        echo "ok article ajoute";


?>

