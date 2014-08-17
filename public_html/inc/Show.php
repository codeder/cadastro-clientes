<?php
if ($show->ShowC()) {
    foreach ($show->ShowC() as $client) {
        ?>
        <table class="table table-bordered view-customer">
            <tr>
                <td colspan="2" rowspan="5" width="20%" class="center"><img src="<?php echo $client['image']; ?>" /></td>
                <th>Código:</th>
                <td><?php echo $client['id']; ?></td>
            </tr>
            <tr>
                <th width="30%">Nome / Razão Social:</th>
                <?php if ($client['type'] == "Fisica"): ?>
                    <td width="50%"><?php echo $client['name']; ?></td>
                <?php else: ?>
                    <td width="50%"><?php echo $client['razao_social']; ?></td>
                <?php endif; ?>
            </tr>
            <tr>
                <th>CPF/CNPJ:</th>
                <?php if ($client['type'] == "Fisica"): ?>
                    <td><?php echo $client['cpf']; ?></td>
                <?php else: ?>
                    <td><?php echo $client['cnpj']; ?></td>
                <?php endif; ?>
            </tr>

            <?php
            if ($client['percent'] <= 30) {
                $class = "progress-bar-danger";
            } elseif (($client['percent'] >= 31) AND ( $client['percent'] <= 60)) {
                $class = "progress-bar-warning";
            } else {
                $class = "progress-bar-success";
            }
            ?>

            <tr>
                <th>Type:</th>
                <td><?php echo $client['type']; ?></td>
            </tr>
            <tr>
                <th>Andamento do projeto</th>
                <td>
                    <?php
                    echo '<div class="progress pull-left">';
                    echo '<div class="progress-bar ' . $class . ' progress-bar-striped" role="progressbar" aria-valuenow="' . $client['percent'] . '" aria-valuemin="0" aria-valuemax="100" style="width: ' . $client['percent'] . '%">';
                    echo '<span class="sr-only">' . $client['percent'] . '%</span>';
                    echo "</div>";
                    echo "</div>";
                    echo "</td>";
                    ?>
                </td>
            </tr>            
            <tr>
                <th colspan="4">Endereço padrão:</th>
            </tr>
            <tr>
                <td colspan="4"><?php echo $client['address'] . ", " . $client['number'] . " - " . $client['city'] . " / " . $client['uf']; ?></td>
            </tr>
            <?php if ($client['billing_address']): ?>
                <tr>
                    <th colspan="4">Endereço de cobrança:</th>
                </tr>
                <tr>
                    <td colspan="4"><?php echo $client['billing_address'] . ", " . $client['billing_number'] . " - " . $client['billing_city'] . " / " . $client['billing_uf']; ?></td>
                </tr>
            <?php endif; ?>
        </table>

        <a href="javascript: history.go(-1)" class="btn btn-default btn-lg">Voltar</a>

    <?php }
}else {
    ?>
    <strong class="bg-danger">Nenhum cliente foi encontrado</strong>    
    <a href="javascript: history.go(-1)" class="btn btn-default btn-lg">Voltar</a>
<?php } ?>