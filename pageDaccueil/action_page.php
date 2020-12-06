<?php
session_start();

function est_vide($chaine)
{
    return (trim($chaine)=='');
}

// il recupere les valeurs
$email = $_POST['email'];
$psw = $_POST['psw'];
$trouve = "0";
// il cree un  tableau
$access = array();

/*echo "<pre>";
print_r($access);
echo "</pre>";*/
// si mon submit marche


// si le tableau existe
    if (isset($_SESSION['access'])) {
        $access = $_SESSION['access'];
    }

foreach ($access as $item => $value) {
    echo "cas $item et $value";
    if($item == $email && $psw == $value )
    {
        $trouve="1";
    }

}
    echo "retour ".$trouve;

    if ($trouve == 1) {


        // Storing session data

        $_SESSION['connected'] = 1;
        $_SESSION["name_user"] = $email;
        header('Location: http://localhost:63342/Sonia_Abou_projet/pageDaccueil/index.php');
    }
    else {
        $_SESSION['connected'] = 0;
        $_SESSION["name_user"] = "inconnu";
        header('Location: http://localhost:63342/Sonia_Abou_projet/pageDaccueil/menuconnections.php?error');
    }



?>
