<?php
session_start();

print_r($_SESSION);
if((!isset($_SESSION['email']) == true)and(!isset($_SESSION['senha'])==true))
{
   unset($_SESSION['email']);
   unset($_SESSION['senha']); 
    header('Location: Login.php');

}else{
$logado = $_SESSION['email'];
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
    echo "<h1>Você Logou com: <u>$logado</u></h1>"
    ?>
<div class="sair">
    <a style="color:white" href="Sair.php">Sair</a>
    </div>
</body>
</html>