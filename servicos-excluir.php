<?php

// requisitar os dados
$id = $_GET['id'];

//montar um sql de delete
$sql = "delete from servicos where id = $id";

// incluir o arquivo de conexão
include "conexao.php";

//executar o sqç delete no BD
$resultado = mysqli_query($conexao, $sql);

//fechar a conexao
mysqli_close($conexao);

//redirecionar para a pagina listar
header ("location: servicos-listar.php");

?>