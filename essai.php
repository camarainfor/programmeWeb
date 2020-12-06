<?php
$email="abou";
$psw="moussa";
$_SESSION['access'] = array();

$_SESSION['access'][$email] = $psw;
print_r($_SESSION);