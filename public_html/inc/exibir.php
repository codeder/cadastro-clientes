<?php foreach ($ExibirCliente->Exibe() as $cliente) { ?>
<table class="table table-bordered view-customer">
    <tr>
        <td colspan="2" rowspan="5" width="20%" class="center"><img src="<?php echo $cliente['foto']; ?>" /></td>
        <th>Código:</th>
        <td><?php echo $cliente['id']; ?></td>
    </tr>
    <tr>
        <th width="30%">Nome / Razão Social:</th>
        <?php if ($cliente['type'] == "Fisica"): ?>
        <td width="50%"><?php echo $cliente['name']; ?></td>
        <?php else: ?>
        <td width="50%"><?php echo $cliente['razao_social']; ?></td>
        <?php endif; ?>
    </tr>
    <tr>
        <th>CPF/CNPJ:</th>
        <?php if ($cliente['type'] == "Fisica"): ?>
        <td><?php echo $cliente['cpf']; ?></td>
        <?php else: ?>
        <td><?php echo $cliente['cnpj']; ?></td>
        <?php endif; ?>
    </tr>

    <?php
    if($cliente['percent']<=30){
    $class = "progress-bar-danger";
    }elseif(($cliente['percent']>=31) AND ($cliente['percent']<=60)){
    $class = "progress-bar-warning";
    }else{
    $class = "progress-bar-success";
    }
    ?>

    <tr>
        <th>Tipo:</th>
        <td><?php echo $cliente['type']; ?></td>
    </tr>
    <tr>
        <th>Andamento do projeto</th>
        <td>
            <?php
            echo '<div class="progress pull-left">';
            echo '<div class="progress-bar '.$class.' progress-bar-striped" role="progressbar" aria-valuenow="'.$cliente['percent'].'" aria-valuemin="0" aria-valuemax="100" style="width: '.$cliente['percent'].'%">';
            echo '<span class="sr-only">'.$cliente['percent'].'%</span>';
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
            <p><?php echo $cliente['description_project']; ?></p>
        </td>
    </tr>
    <tr>
        <th colspan="4">Endereço padrão:</th>
    </tr>
    <tr>
        <td colspan="4"><?php echo $cliente['address'].", ".$cliente['number']." - ".$cliente['city']." / ".$cliente['uf']; ?></td>
    </tr>
    <?php if ($cliente['billing_address']): ?>
    <tr>
        <th colspan="4">Endereço de cobrança:</th>
    </tr>
    <tr>
        <td colspan="4"><?php echo $cliente['billing_address'].", ".$cliente['billing_number']." - ".$cliente['billing_city']." / ".$cliente['billing_uf']; ?></td>
    </tr>
    <?php endif; ?>
</table>

<a href="javascript: history.go(-1)" class="btn btn-default btn-lg">Voltar</a>

<?php } ?>