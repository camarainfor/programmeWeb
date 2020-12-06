<?php
session_start();
$email = $_POST['email'];
$psw = $_POST['psw'];
$trouve = "0";
$access = array();

if (isset($_SESSION['access'])) {
    $access = $_SESSION['access'];
    }
echo "<pre>";
print_r($access);
echo "</pre>";

foreach ($access as $item => $value) {
    echo "cas $item et $value";
    if($item == $email && $psw == $value )
    {
        $trouve="1";
    }

}

echo "retour ".$trouve;

if ($trouve == 1)
    header('Location: http://localhost:63342/Sonia_Abou_projet/pageDaccueil/index.php');
else
    header('Location: http://localhost:63342/Sonia_Abou_projet/pageDaccueil/menuconnections.php?error');


?>
