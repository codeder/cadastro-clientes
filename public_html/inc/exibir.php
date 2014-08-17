<?php foreach ($ExibirClient->Exibe() as $Client) { ?>
<table class="table table-bordered view-customer">
    <tr>
        <td colspan="2" rowspan="5" width="20%" class="center"><img src="<?php echo $Client['Image']; ?>" /></td>
        <th>Código:</th>
        <td><?php echo $Client['id']; ?></td>
    </tr>
    <tr>
        <th width="30%">Nome / Razão Social:</th>
        <?php if ($Client['type'] == "Fisica"): ?>
        <td width="50%"><?php echo $Client['name']; ?></td>
        <?php else: ?>
        <td width="50%"><?php echo $Client['razao_social']; ?></td>
        <?php endif; ?>
    </tr>
    <tr>
        <th>CPF/CNPJ:</th>
        <?php if ($Client['type'] == "Fisica"): ?>
        <td><?php echo $Client['cpf']; ?></td>
        <?php else: ?>
        <td><?php echo $Client['cnpj']; ?></td>
        <?php endif; ?>
    </tr>

    <?php
    if($Client['percent']<=30){
    $class = "progress-bar-danger";
    }elseif(($Client['percent']>=31) AND ($Client['percent']<=60)){
    $class = "progress-bar-warning";
    }else{
    $class = "progress-bar-success";
    }
    ?>

    <tr>
        <th>Type:</th>
        <td><?php echo $Client['type']; ?></td>
    </tr>
    <tr>
        <th>Andamento do projeto</th>
        <td>
            <?php
            echo '<div class="progress pull-left">';
            echo '<div class="progress-bar '.$class.' progress-bar-striped" role="progressbar" aria-valuenow="'.$Client['percent'].'" aria-valuemin="0" aria-valuemax="100" style="width: '.$Client['percent'].'%">';
            echo '<span class="sr-only">'.$Client['percent'].'%</span>';
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
            <p><?php echo $Client['description_project']; ?></p>
        </td>
    </tr>
    <tr>
        <th colspan="4">Endereço padrão:</th>
    </tr>
    <tr>
        <td colspan="4"><?php echo $Client['address'].", ".$Client['number']." - ".$Client['city']." / ".$Client['uf']; ?></td>
    </tr>
    <?php if ($Client['billing_address']): ?>
    <tr>
        <th colspan="4">Endereço de cobrança:</th>
    </tr>
    <tr>
        <td colspan="4"><?php echo $Client['billing_address'].", ".$Client['billing_number']." - ".$Client['billing_city']." / ".$Client['billing_uf']; ?></td>
    </tr>
    <?php endif; ?>
</table>

<a href="javascript: history.go(-1)" class="btn btn-default btn-lg">Voltar</a>

<?php } ?>