<?php

require_once("conexao.php");

$sql = "select * from clientes";
$resultado = mysqli_query($conexao, $sql);

$registros = mysqli_num_rows($resultado);
if ($registros < 1) {
} else {

    while ($dados = mysqli_fetch_array($resultado)) {
        $str_array[] = $dados;
    }

    // Tranforma o array $dados em JSON
    echo json_encode($str_array, JSON_PRETTY_PRINT);
}

mysqli_close($conexao);
