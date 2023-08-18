<?php
session_start();

print_r($_SESSION);
if((!isset($_SESSION['email']) == true)and(!isset($_SESSION['senha'])==true))
{
   unset($_SESSION['email']);
   unset($_SESSION['senha']); 
    header('Location: Login.php');


}else{
    include_once('config.php');
$email = $_SESSION['email'];

    $sql = "SELECT nome FROM usuarios WHERE email = $email";
    $result = $conexao->query($sql);
 print_r($sql);
  print_r('<br>');
  print_r($result); 
    if(mysqli_num_rows($result)>0){
echo "nome encontrado";
    }else{
        echo "não encontrado";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lobby</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <h1>BEM VINDO AO NOSSO SITE</h1>
    <?php
    echo "<h1>Você Logou com: <u>$email</u></h1>"
    ?>
<div class="sair">
    <a style="color:white" href="Sair.php">Sair</a>
    </div>
</body>
</html>