<?php

DEFINE("SRC","../src/ES/");

/* Autoloader */
require_once SRC.'Config/SplClassLoader.php';
$loader = new SplClassLoader('ES', '../src');
$loader->register();

/* Dados dos clientes */
require_once SRC.'Data/Clientes.php';

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
    <script>$(function(){$('.table-list').tablesorter(); });</script>

</head>
<body>


    <div class="container">


        <div class="page-title">
            <h1>Clientes - Andamento dos projetos</h1>
        </div>


        <?php
        if (!isset($_GET['id'])){
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
                foreach ($clientes as $cliente) {

                    if($cliente->getPercentual()<=30){
                        $class = "progress-bar-danger";
                    }elseif(($cliente->getPercentual()>=31) AND ($cliente->getPercentual()<=60)){
                        $class = "progress-bar-warning";
                    }else{
                        $class = "progress-bar-success";
                    }


                    echo "<tr>";
                    echo '<td class="center">' . $cliente->getId() . '</td>';
                    echo "<td><img src=\"" . $cliente->getFoto() . "\"/></td>";
                    if ($cliente->getTipo() == "Fisica"):
                        echo "<td>" . $cliente->getNome() . "</td>";
                    else:
                        echo "<td>" . $cliente->getRazaoSocial() . "</td>";
                    endif;
                    echo '<td class="left">' . $cliente->getTipo() . '</td>';
                    echo '<td class="center">';
                    echo '<div class="progress">';
                    echo '<div class="progress-bar '.$class.' progress-bar-striped" role="progressbar" aria-valuenow="'.$cliente->getPercentual().'" aria-valuemin="0" aria-valuemax="100" style="width: '.$cliente->getPercentual().'%">'; 
                    echo '<span class="sr-only">'.$cliente->getPercentual().'%</span>';
                    echo "</div>";
                    echo "</div>";
                    echo "</td>";
                    echo '<td class="center"><a class="btn btn-default" href="?id=' . $cliente->getId() . '">Visualizar</a></td>';
                    echo "</tr>";
                }
                ?>


            </tbody>
        </table>        

        <?php
        } elseif($_GET['id'] <= count($clientes)){ 
            $id = $_GET['id'] - 1;
        ?>

        <table class="table table-bordered view-customer">
            <tr>
                <td colspan="2" rowspan="5" width="20%" class="center"><img src="<?php echo $clientes[$id]->getFoto(); ?>" /></td>
                <th>Código:</th>
                <td><?php echo $clientes[$id]->getId(); ?></td>
            </tr>
            <tr>
                <th width="30%">Nome / Razão Social:</th>
                <?php if ($clientes[$id]->getTipo() == "Fisica"): ?>
                    <td width="50%"><?php echo $clientes[$id]->getNome(); ?></td>
                <?php else: ?>
                    <td width="50%"><?php echo $clientes[$id]->getRazaoSocial(); ?></td>
                <?php endif; ?>
            </tr>
            <tr>
                <th>CPF/CNPJ:</th>
                <?php if ($clientes[$id]->getTipo() == "Fisica"): ?>
                    <td><?php echo $clientes[$id]->getCpf(); ?></td>
                <?php else: ?>
                    <td><?php echo $clientes[$id]->getCnpj(); ?></td>
                <?php endif; ?>
            </tr>

            <?php
            if($clientes[$id]->getPercentual()<=30){
                $class = "progress-bar-danger";
            }elseif(($clientes[$id]->getPercentual()>=31) AND ($clientes[$id]->getPercentual()<=60)){
                $class = "progress-bar-warning";
            }else{
                $class = "progress-bar-success";
            }
            ?>

            <tr>
                <th>Tipo:</th>
                <td><?php echo $clientes[$id]->getTipo(); ?></td>
            </tr>
            <tr>
                <th>Andamento do projeto</th>
                <td>
                    <?php
                    echo '<div class="progress pull-left">';
                    echo '<div class="progress-bar '.$class.' progress-bar-striped" role="progressbar" aria-valuenow="'.$clientes[$id]->getPercentual().'" aria-valuemin="0" aria-valuemax="100" style="width: '.$clientes[$id]->getPercentual().'%">'; 
                    echo '<span class="sr-only">'.$clientes[$id]->getPercentual().'%</span>';
                    echo "</div>";
                    echo "</div>";
                    echo "</td>";
                    ?>
                </td>
            </tr>            
            <tr>
                <th colspan="4">Descrição do Projeto</th>
            </tr>
            <tr>
                <td colspan="4">
                    <p><?php echo $clientes[$id]->getDescricao(); ?></p>
                </td>
            </tr>
            <tr>
                <th colspan="4">Endereço padrão:</th>
            </tr>
            <tr>
                <td colspan="4"><?php echo $clientes[$id]->getEnd(); ?></td>
            </tr>
            <?php if ($clientes[$id]->getEndCobranca()): ?>
                <tr>
                    <th colspan="4">Endereço de cobrança:</th>
                </tr>
                <tr>
                    <td colspan="4"><?php echo $clientes[$id]->getEndCobranca(); ?></td>
                </tr>
            <?php endif; ?>
        </table>
        <a href="javascript: history.go(-1)" class="btn btn-default btn-lg">Voltar</a>

    <?php } else{ ?>

    <strong class="bg-danger">Nenhum cliente foi encontrado</strong>    
    <a href="javascript: history.go(-1)" class="btn btn-default btn-lg">Voltar</a>
    <?php }; ?>



</div>


</body>
</html>

