<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1> Seja bem vindo, você está logado </h1>
    </div>
</body>
</html>


<?php 

session_start();

if (!isset ($_SESSION['username'])) {
    header ('Location: login.html');
    exit;
}

?>