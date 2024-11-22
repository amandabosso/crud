<?php

// requisitar os dados
$id = $_GET['id'];
$servico = $_POST['servico'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];

//montar um sql de update
$sql = "update servicos set servico = '$servico', descricao = '$descricao', preco = '$preco', categoria = '$categoria' where id = $id ";

// incluir o arquivo de conexão
  include "conexao.php";

//executar o sqç update no BD
 $resultado = mysqli_query($conexao, $sql);

//fechar a conexao
 mysqli_close($conexao);

//redirecionar para a pagina listar
header ("location: servicos-listar.php");

?>