<?php require_once ('core/conexao_mysql.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo . ' - Biblioteca Portátil';?></title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <section class="flex">

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="#" class="logo">Biblioteca Portatil<span>.</span></a>

        <nav class="navbar">
            <a href="#home">Inicio</a>
            <a href="#about">Sobre</a>
            <a href="#products">Livros</a>
            <a href="#review">Comentários</a>
            <a href="#contact">Contatos</a>
        </nav>

        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-user"></a>
        </div>

    </section>

</header>

<!-- header section ends -->