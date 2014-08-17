<table class="table table-striped table-list">
            <thead>
                <tr>
                    <th class="center"><span>Código</span></th>                                        
                    <th>Imagem</th>
                    <th><span>Nome / Razão Social</span></th>
                    <th class="left"><span>Type</span></th>
                    <th class="center"><span>Progresso do projeto:</span></th>
                    <th class="center">Informações do Client</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($ListarClients->Listar() as $Client) {

                    if($Client['percent']<=30){
                        $class = "progress-bar-danger";
                    }elseif(($Client['percent']>=31) AND ($Client['percent']<=60)){
                        $class = "progress-bar-warning";
                    }else{
                        $class = "progress-bar-success";
                    }

                    echo "<tr>";
                    echo '<td class="center">' . $Client['id'] . '</td>';
                    echo "<td><img src=\"" . $Client['Image'] . "\"/></td>";                    
                    if ($Client['type'] == "Fisica"):
                        echo "<td>" . $Client['name'] . "</td>";
                    else:
                        echo "<td>" . $Client['razao_social'] . "</td>";
                    endif;
                    echo '<td class="left">' . $Client['type'] . '</td>';
                    echo '<td class="center">';
                    echo '<div class="progress">';
                    echo '<div class="progress-bar '.$class.' progress-bar-striped" role="progressbar" aria-valuenow="'.$Client['percent'].'" aria-valuemin="0" aria-valuemax="100" style="width: '.$Client['percent'].'%">'; 
                    echo '<span class="sr-only">'.$Client['percent'].'%</span>';
                    echo "</div>";
                    echo "</div>";
                    echo "</td>";
                    echo '<td class="center"><a class="btn btn-default" href="?id=' . $Client['id'] . '">Visualizar</a></td>';
                    echo "</tr>";
                }
                ?>


            </tbody>
        </table> 