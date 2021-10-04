<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
<label>Linhas: <input type="text" name="linhas" /></label>
<br />
<label>Colunas: <input type="text" name="colunas" /></label>
<br />
<input type="Submit" value="Gerar tabela" />
</form>

<?php
$linhas = isset($_POST['linhas']) ? $_POST['linhas'] : -1;
$colunas = isset($_POST['colunas']) ? $_POST['colunas'] : -1;
if($linhas > 0 && $colunas > 0)
    echo "Criando uma tabela de " . $linhas . " linhas por " . $colunas . " colunas";

echo "<table border='1' cellpading='10' cellspacing='10' style='border:1px solid #000; width:" . ($colunas * 100) . "px;height:" . ($linhas * 50). "px;'>";
$l = 0;

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
</body>
</html>