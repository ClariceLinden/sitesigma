<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';


$id = $_GET['id'];
$tipo = $_GET['tipo'];
?>
<div class="container mt-5"> 
    <div class="row"> 
        <div class="col">
            <h1><?php echo $produtos[$id]['nome'];?></h1>
            <p><?php echo $produtos[$id]['descricao'];?></p>
            <img src="./content/<?php echo $produtos[$id]['imagem'];?>" class="card-img-top" alt="...">
            <h4>R$ <?php echo $produtos[$id]['preco'];?></h4>
        </div>
    </div>
    <div class="col">Voltar</div>
    <div class="col">Comprar</div>
    </div>    
</div>
<?php
// include do footer
include_once './includes/_footer.php';
?>