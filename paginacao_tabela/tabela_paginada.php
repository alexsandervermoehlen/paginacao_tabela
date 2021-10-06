<?php
        $iLinha = 62;//rand(10, 30);
        $iColuna = 5;//rand(10, 30);
        for ($i = 0; $i < $iLinha; $i++) {
            for($j = 0; $j <= $iColuna; $j++) {
                $aArray[$i][$j] = rand(0, 100);
            }
        }


        echo '<table border="1">';
            $valor = $_GET['pagina']*10;
            $fim = ($valor==10)?$fim=9:$fim=$valor-1;
            //if ($valor==10) {
            //    $fim=9;
            //} else {
            //    $fim=$valor-1;
            //}
            $inicio = ($valor==10)?$inicio=0:$fim-9;
            //()?xxx:xxx;

            //$fim = $_GET['pagina']*10;
            //$inicio = $fim-10;
            for ($i = $inicio; $i <= $fim; $i++) {
            echo '<tr>';
                echo "<td>{$i}</td>";
                for($j = 0; $j <= $iColuna; $j++) {
                    echo '<td>';
                    echo $aArray[$i][$j]. ' ';
                    echo '</td>';
                }      
            echo '</tr>';  
            }     
          
        echo '</table>';

        //links
        for ($i = 1; $i <= ($iLinha/10); $i++) {
            echo "<a href=\"?pagina={$i}\">{$i}</a> ";
        }
    ?>