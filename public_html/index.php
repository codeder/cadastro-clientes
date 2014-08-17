<?php
require_once("./fixture/db.php");
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
        <title>Cadastro de Clientes - PHPOO - Code Education</title>

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
            use ES\Person\ListClients;
            use ES\Person\ShowClient;

            $conn = new Conn;
            $list = new ListClients($conn);
            $show = new ShowClient($conn);
            ?>

            <?php
                if (!isset($_GET['id'])) :
                    require_once 'inc/List.php';
            ?>

            <?php else:
                $id = $_GET['id'];
                require_once 'inc/Show.php';
            ?>        
                
            <?php endif; ?>


        </div>


    </body>
</html>

