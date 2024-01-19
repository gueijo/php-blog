<?php
    include_once("helpers/url.php");
    include_once("data/posts.php");
    include_once("data/categories.php");
?>

<!DOCTYPE html>

<html lang="pt-br">

        <head>

            <title>Blogers PW's</title>
            <link rel="shortcurt icon" href="Img/p.png">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- CSS PROJETO -->
            <link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>/css/reset.css">
            <link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>/css/style.css">
            <!-- GOOGLE FONTS -->

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Cinzel&family=Montserrat:wght@100;200;500;700&display=swap" rel="stylesheet">

        </head>

<body>

    <header>

        <a href="<?= $BASE_URL ?>" class="logo">

            <img src="<?= $BASE_URL ?>/img/logo.png" alt="Our Blog PW">

        </a>

        <nav>

            <ul class="navbar">
                <li> <a href="<?= $BASE_URL ?>" class="navlink"> Home </a> </li>
                <li> <a href="##############" class="navlink"> Categorias </a> </li>
                <li> <a href="##############" class="navlink"> Sobre </a> </li>
                <li> <a href="<?= $BASE_URL ?>contato.php" class="navlink"> Contato </a> </li>
            </ul>
        </nav>

    </href>

    </header>