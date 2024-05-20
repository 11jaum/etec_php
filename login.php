<?php 

session_start();

$user = 'etec';
$pwsd = 'etec'; 

$username = $_POST['user'];
$password = $_POST['pswd'];

if ($username == $user && $password = $pwsd) {
    $_SESSION['username'] = $_POST['user'];
    header ('Location: tela.php');
}

