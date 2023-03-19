<?php

include('./modules/config.php');


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>Projeto</title>
</head>
<body >
<div class="wrapper fadeInDown">
  <div id="formContent">
    <br>
    <!-- Tabs Titles -->
    <!-- Login Form -->
    <form action= "modules/verifiqueLogin.php" method = "POST">
     <?php 
    
        if(isset($_SESSION["mensagemStr"])) echo $_SESSION["mensagemStr"];
     ?>
      <input type="text" id="nomeLogin" class="fadeIn second" name="nomeLogin" placeholder="login">
      <input type="password" id="senhaLogin" class="fadeIn third" name="senhaLogin" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="login" value="entrar" onclick="<?php $_SESSION["mensagemStr"]='' ?>" onload="myFunction()">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" style="color: black;" href="#">Esqueceu a senha?</a><br>
      <div style="justify-content: center">ou</div>
    </div>
    <a class="underlineHover" style="padding-bottom: 5px;margin-top:40px" href="./modules/cadastro.php">Inscreva-se</a><br>
  </div>
</div>

  <script src="./js/script.js"></script>
</body>
</html>