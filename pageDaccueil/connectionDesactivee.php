<?php
session_start();
$_SESSION['merged'] = "0";
$_SESSION['connected'] = 0;
$_SESSION['name_user'] = "inconnu";
header('Location: http://localhost:63342/Sonia_Abou_projet/pageDaccueil/index.php');
?>