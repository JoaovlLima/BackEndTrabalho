<?php
if(isset($_POST['submit']))
{
  include_once('config.php');
  /* print_r('nome: '.$_POST['nome']);
  print_r("<br>");
  print_r('Sobrenome: '.$_POST['sobrenome']);
  print_r("<br>");
  print_r('Email: '.$_POST['email']);
  print_r("<br>");
  print_r('telefone: '.$_POST['telefone']);
  print_r("<br>");
  print_r('CEP: '.$_POST['cep']);
  print_r("<br>");
  print_r('Endereço: '.$_POST['endereco']); */
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $email= $_POST['email'];
  $telefone= $_POST['telefone'];
  $cep= $_POST['cep'];
  $endereco= $_POST['endereco'];
$result
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Cadastro</h2>
        <br><br>
        <form action="Cadastro.php" method="POST">
          <input type="text" placeholder="nome" id="nome" name="nome" class="inputUser" require>
          <br><br>
          <input type="text" placeholder="Sobrenome" id="sobrenome" name="sobrenome">
          <br><br>
          <input type="text" placeholder="E-mail" id="email" required name="email">
          <br><br>
          <input type="password" placeholder="Senha" id="senha" required name="senha">
          <br><br>
          <input type="tell" id="telefone" class="input-padrao" name="telefone" required placeholder="(xx) xxxxx-xxxx">
          <br><br>
          <input type="text" placeholder="Cep" id="cep" name="cep">
          <br><br>
          <input type="text" placeholder="Endereço" id="endereco" name="endereco">
          <br><br>
          <input type="submit" value="Cadastrar" id="submit" name="submit">
        </form>
      </div>
</body>
<script src="Script.js"></script>
</html>