<?php
include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blog do Afonso</title>
<!-- Estilo do projeto -->


<link rel="stylesheet" href="css/style.css">
<!-- $BASE_URL -->

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
    <a href="<?= $BASE_URL ?>" id="logo">
    <img src="img/logo.jpg" alt="logo" >
    </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Categorias</a></li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="contato.php" class="nav-link" >Contato<contato class="php"></contato></a></li>
            </ul>
        </nav>
    </header>    


