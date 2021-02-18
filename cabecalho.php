<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php print $cabecalho_title; ?></title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/sobre.css">
<link rel="stylesheet" href="css/estilosM.css">
<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
<meta name="viewport" content="width=device-width">
<?php print $cabecalho_css; ?>
</head>
<body>
<header class="container">
    <h1>
    <a href="index.php"><img src="img/logo.jpg" alt="Joalheria Momentos"></a>
    </h1>
    <p class="sacola">
    Nenhum item na sacola de compras
    <img src="img/sacola.png" alt="sacola de compras">
    </p>
    <nav class="menu-opcoes">
        <ul class="nav navbar-nav">
            <li class="active"><a href="sobre.php">Sobre <span class="glyphicon glyphicon-book"></span></a></li>
            <li><a href="#">Ajuda <span class="glyphicon glyphicon-question-sign"></span></a></li>
            <li><a href="#">Perguntas frequentes <span class="glyphicon glyphicon-exclamation-sign"></span></a></li>
            <li><a href="email.php">Entre em contato <span class="glyphicon glyphicon-envelope"></span></a></li>
        </ul>
    </nav>
</header>