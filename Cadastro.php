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
  $senha= $_POST['senha'];
  $telefone= $_POST['telefone'];
  $cep= $_POST['cep'];
  $endereco= $_POST['endereco'];
  $confirmeSenha = $_POST['confirmeSenha'];

  $sql = "SELECT * FROM usuarios WHERE email = '$email'";
  $result = $conexao->query($sql);
  
  /* print_r($sql);
  print_r('<br>');
  print_r($result); */

if(mysqli_num_rows($result)<1){

  if($senha == $confirmeSenha){

$result =mysqli_query($conexao, "INSERT INTO usuarios(nome,sobrenome,email,senha,telefone,cep,endereco) 
VALUES('$nome','$sobrenome','$email','$senha','$telefone','$cep','$endereco')");
}else{
echo "Senhas Diferentes";
}
}else{
echo"Email já registrado";
}
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
          <input type="password" placeholder="Confirmar senha" id="confirmeSenha" required name="confirmeSenha">
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