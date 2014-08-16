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
                foreach ($ListarClientes->Listar() as $cliente) {

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