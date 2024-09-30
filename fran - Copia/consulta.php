<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
</head>
<body>

    <H1>Consulta de Cliente </H1>
        <table class= "table">
            <tr>
                <td>Codigo</td>
                <td>Nome</td>
                <td>Sobrenome</td>
                <td>Email</td>
            </tr>
    <?php
include("conexao.php");
$consultar = "select * from cliente";
$executar = mysqli_query ($conexao, $consultar);
while($linha = mysqli_fetch_array($executar)){
    echo "<tr>";
    echo "<td>".$linha['cli_codigo']. "</td>";
    echo "<tr>".$linha['cli_nome']. "</td>";
    echo "<tr>".$linha['cli_email']. "</td>";
    echo "<tr>";
}
mysqli_close($conexao);

    
    ?>
</table>
</body>
</html>