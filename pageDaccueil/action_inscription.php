<?php
session_start();
echo "begin";
print_r(($_POST));
echo "end";

$email = $_POST['email'];
$psw = $_POST['password'];

$trouve = "0";
if (!isset($SESSION['access'])) {
    $_SESSION['access'] = array();
    }
$_SESSION['access'][$email] = $psw;


header('Location: http://localhost:63342/Sonia_Abou_projet/pageDaccueil/index.php');

?>
