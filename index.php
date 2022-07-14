<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?> 

<div class="container">
    <div class="row mt-5">
    <?php
    //crio uma variavel que contem o SQL executado
    $sql = "SELECT * FROM categorias WHERE Ativo = 1 ";
    //executa o comando SQL
    $exec = mysqli_query($conn,$sql);
    //informar a quantidade de registros de dados
    $numProdutos = mysqli_num_rows($exec);
    //percore todos os dados extraidos do banco
    while ( $dados = mysqli_fetch_assoc($exec)) {
      echo '<h1>'.$dados['Nome'].'<h1>';
    }


    //laço de repetição para exibir os três primeiros produtos
   for ($i=0; $i < 3 ; $i++) { 
     ?>
        <div class="card m-3" style="width: 18rem;">
         <img src="./content/<?php echo $produtos[$i]['imagem'];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $produtos[$i]['nome'];?></h5>
                <p class="card-text"><?php echo $produtos[$i]['descricao'];?></p>
                <a href="produto-detalhe.php?id=<?php echo $i;?>&tipo=promocao" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    <?php
     }
    ?>
  </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>