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

$conn = new Conn;
$clientes = new Listar($conn->Connect());


?>


            
        <table class="table table-striped table-list">
            <thead>
                <tr>
                    <th class="center"><span>Código</span></th>                                        
                    <th>Imagem</th>
                    <th><span>Nome / Razão Social</span></th>
                    <th class="left"><span>Tipo</span></th>
                    <th class="center"><span>Progresso do projeto:</span></th>
                    <th class="center">Informações do cliente</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($clientes->Listar() as $cliente) {

                    if($cliente['percent']<=30){
                        $class = "progress-bar-danger";
                    }elseif(($cliente['percent']>=31) AND ($cliente['percent']<=60)){
                        $class = "progress-bar-warning";
                    }else{
                        $class = "progress-bar-success";
                    }

                    echo "<tr>";
                    echo '<td class="center">' . $cliente['id'] . '</td>';
                    echo "<td><img src=\"" . $cliente['foto'] . "\"/></td>";
                    if ($cliente['type'] == "Fisica"):
                        echo "<td>" . $cliente['name'] . "</td>";
                    else:
                        echo "<td>" . $cliente['razao_social'] . "</td>";
                    endif;
                    echo '<td class="left">' . $cliente['type'] . '</td>';
                    echo '<td class="center">';
                    echo '<div class="progress">';
                    echo '<div class="progress-bar '.$class.' progress-bar-striped" role="progressbar" aria-valuenow="'.$cliente['percent'].'" aria-valuemin="0" aria-valuemax="100" style="width: '.$cliente['percent'].'%">'; 
                    echo '<span class="sr-only">'.$cliente['percent'].'%</span>';
                    echo "</div>";
                    echo "</div>";
                    echo "</td>";
                    echo '<td class="center"><a class="btn btn-default" href="?id=' . $cliente['id'] . '">Visualizar</a></td>';
                    echo "</tr>";
                }
                ?>


            </tbody>
        </table>             
            
            
            

        </div>


    </body>
</html>

