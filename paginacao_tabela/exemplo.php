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
while($l < $linhas)
{
    $l++;
    echo "<tr>";
    $c = 0;
    while ($c < $colunas)
    {
        $c++;
        echo "<td style='border:1px dashed #black>L" . $l . "C" . $c . "</td>";     
    }
    echo "</tr>";   
}
echo "</table>";
?>
</body>
</html>