<?php include "header.php"; ?>
<?php
$id = $_GET['id'];
$sql = "select * from servicos where id = $id";
$servico = $descricao = $preco = $categoria = "";

include "conexao.php";
$resultado = mysqli_query($conexao,$sql);
while ($linha = mysqli_fetch_assoc($resultado)){
    $servico = $linha ['servico'];
    $descricao = $linha ['descricao'];
    $preco = $linha ['preco'];
    $categoria = $linha ['categoria'];

}

echo $servico . $descricao . $preco . $categoria;

?>

<main>  
    <h2> Editar servico </h2>
    <form method="post" action="servicos-atualizar.php?id=<?=$id;?>">
        <label> Serviços: <input name="servico" value="<?=$servico;?>"></label><br>
        <label> Descrição: <input name="descricao" value="<?=$descricao;?>"></label><br>
        <label> Preço: <input name="preco" value="<?=$preco;?>" ></label><br>
        <label> Categoria: <input name="categoria" value="<?=$categoria;?>"></label><br>
        
        
        <button type= "submit"> Salvar </button>
    </form>
</main>

<?php include "footer.php"; ?>