<?php
DEFINE("SRC", "../src/ES/");

/* Autoloader */
require_once SRC . 'Autoloader/SplClassLoader.php';
$loader = new SplClassLoader('ES', '../src');
$loader->register();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Exercício2 - PHPOO - Code Education</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
        <link rel="stylesheet" href="assets/css/styles.css">


        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="assets/js/jquery.tablesorter.min.js"></script>
        <script>$(function() {
                $('.table-list').tablesorter();
            });</script>

    </head>
    <body>


        <div class="container">


            <div class="page-title">
                <h1>Clientes - Andamento dos projetos</h1>
            </div>

            <?php

            use ES\Connection\Conn;
            use ES\Pessoa\Listar;
            use ES\Pessoa\Exibir;

            $conn = new Conn;
            $ListarClientes = new Listar($conn);
            $ExibirCliente = new Exibir($conn);
            ?>

            <?php
                if (!isset($_GET['id'])) :
                    require_once 'inc/listar.php';
            ?>

            <?php elseif($_GET['id']):
                $id = $_GET['id'];
                require_once 'inc/exibir.php';
            ?>

            <?php else: ?>            
                <strong class="bg-danger">Nenhum cliente foi encontrado</strong>    
                <a href="javascript: history.go(-1)" class="btn btn-default btn-lg">Voltar</a>
            <?php endif; ?>


        </div>


    </body>
</html>

