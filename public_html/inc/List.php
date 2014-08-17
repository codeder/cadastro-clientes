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
                foreach ($list->ListC() as $client) {

                    if($client['percent']<=30){
                        $class = "progress-bar-danger";
                    }elseif(($client['percent']>=31) AND ($client['percent']<=60)){
                        $class = "progress-bar-warning";
                    }else{
                        $class = "progress-bar-success";
                    }

                    echo "<tr>";
                    echo '<td class="center">' . $client['id'] . '</td>';
                    echo "<td><img src=\"" . $client['image'] . "\"/></td>";                    
                    if ($client['type'] == "Fisica"):
                        echo "<td>" . $client['name'] . "</td>";
                    else:
                        echo "<td>" . $client['razao_social'] . "</td>";
                    endif;
                    echo '<td class="left">' . $client['type'] . '</td>';
                    echo '<td class="center">';
                    echo '<div class="progress">';
                    echo '<div class="progress-bar '.$class.' progress-bar-striped" role="progressbar" aria-valuenow="'.$client['percent'].'" aria-valuemin="0" aria-valuemax="100" style="width: '.$client['percent'].'%">'; 
                    echo '<span class="sr-only">'.$client['percent'].'%</span>';
                    echo "</div>";
                    echo "</div>";
                    echo "</td>";
                    echo '<td class="center"><a class="btn btn-default" href="?id=' . $client['id'] . '">Visualizar</a></td>';
                    echo "</tr>";
                }
                ?>


            </tbody>
        </table> 