<?php
// les fonctions que jai ecrite pour men servir

function creationPanier(){

    if(isset($_SESSION["panier"])){
        $_SESSION["panier"]=array();
        $_SESSION["panier"]["libelleProduit"]=array();
        $_SESSION["panier"]["qteProduit"]=array();
        $_SESSION["panier"]["verrouillé"]=false;
    }
return true;
}

function showPanier() {
    print_r($_SESSION["panier"]);
}
function ajouterArticle($libelleProduit,$qteProduit){
    echo "<pre>";
    print_rt($_POST);
    echo "</pre>";
    if(creationPanier()&&!isVerouille()){
        $position_produit = array_search($libelleProduit,$_SESSION["panier"]["libelleProduit"]);
    // il lon deja rencontre, on increment
        if($position_produit !== false){

            $_SESSION["panier"]["libelleProduit"][$position_produit]+=$qteProduit;
        }else{
// on ajoute pour la premiere fois
            array_push($_SESSION["panier"]["libelleProduit"],$libelleProduit);
            array_push($_SESSION["panier"]["qteProduit"],$qteProduit);
        }



    }
    // ya pas de panier et on ajouter un produit
    else{
        echo "Erreur, veuillez contacter l'administrateur";
    }

}

function ModifierQteProduit($libelleProduit,$qteProduit){
if(creationPanier()&&!isVerouille()){
    // si la quantite est positive
    if($qteProduit>0){
        $position_produit = array_search($libelleProduit,$_SESSION["panier"]["libelleProduit"]);
        if($position_produit !== false){
            $_SESSION["panier"]["libelleProduit"][$position_produit ]=$qteProduit;

        }else{

            supprimerProduit($libelleProduit);

        }



    }
    // le panier nest pas vrai mais on arrive modifier
    else{
        echo "Erreur, veuillez contacter l'administrateur";
    }


}
}

function supprimerAliment($libelleProduit){
    if(creationPanier()&&!isVerouille()){
    $temp=array();
        $temp["libelleProduit"]= array();
        $temp["qteProduit"]= array();
        $temp["verrouille"]= array();

        for($i=0;$i<count($_SESSION["panier"]["libelleProduit"]);$i++){
            if($_SESSION["panier"]["libelleProduit"][$i] !== $libelleProduit){

                array_pusch($_SESSION["panier"]["libelleProduit"],$_SESSION["panier"]["libelleProduit"][$i]);
                array_pusch($_SESSION["panier"]["qteProduit"],$_SESSION["panier"]["qtiteProduit"][$i]);

        }
            $_SESSION["panier"]=$temp;
            unset($tmp);


    }else{
        echo "Erreur, veuillez contacter l'administrateur";
    }




}}
function supprimerPanier(){
if(isset($_SESSION["panier"])){


    unset( $_SESSION["panier"]);
}


}


function isVerrouille(){

    if(isset($_SESSION["panier"])&& $_SESSION["isverrouille"]){
        return true;

    }else{
        return false;
    }

}



function compterArticles(){
if(isset($_SESSION["panier"])){
    return count($_SESSION["panier"]["libelleProduit"]);
}
}



?>

