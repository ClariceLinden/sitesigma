<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

//valida se a variavel post txtNome foi envida

if(isset($_POST['txtNome'])){
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $telefone = $_POST['txtTelefone'];
    $mensagem = $_POST['txtMensagem'];
    echo "s$nome $email $telefone $mensagem";
}

?>

<h1>Contato</h1>


<form action="./contato.php" method="post">
    <label for="txtName">Nome Completo</label>
    <input type="text" name="txtNome" id="txtNome">
    <label for="txtEmail">E-Mail</label>
    <input type="text" name="txtEmail" id="txtEmail">
    <label for="txtTelefone">Telefone</label>
    <input type="text" name="txtTelefone" id="txtTelefone">
    <label for="txtMensagem">Mensagem</label>
    <input type="text" name="txtMensagem" id="txtMensagem">
    <input type="submit" value="cadastrar">
</form>




<?php
// include do footer
include_once './includes/_footer.php';
?>