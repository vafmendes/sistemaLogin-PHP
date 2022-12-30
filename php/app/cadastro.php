<?php
  include("../modules/config.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    
    
    
    <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

    <title>Projeto2</title>
</head>
<style>
html {
  background-color: gray;
}

body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
  background-color: gray;
}

a {
  color: #cccccc;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h1 {
  color: #cccccc;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #5C5958;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formContent .labelUsu {
  background: #5C5958;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  text-align: start;
}


#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}



/* TABS */

h2.inactive {
  color: #cccccc;
}

h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit]  {
  background-color: #5C5958;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  /*-webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);*/
  /*box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);*/
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover  {
  background-color: white;
  color: black;
}

input[type=button]:active, input[type=submit]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=text], input[type=tel], input[type=password], input[type=email], input[type=date]{
  background-color: #DFDFDF;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus, input[type=tel]:focus, input[type=password]:focus, input[type=email]:focus, input[type=date]:focus {
  background-color: #DFDFDF;
  border-bottom: 2px solid #5fbae9;
}

input[type=text]:placeholder, input[type=tel]:placeholder, input[type=password]:placeholder, input[type=email]:placeholder {
  color: #cccccc;
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
  cursor: pointer;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #56baed;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}



/* OTHERS */

*:focus {
    outline: none;
} 

#icon {
  width:60%;}
</style>

<body>
<?php 
    
    if(isset($_SESSION["mensagemWrng"])) echo $_SESSION["mensagemWrng"];
 ?>
<div class="wrapper fadeInDown">

  <div id="formContent">
    <br>
    <br>
    <!-- Tabs Titles -->
    <!-- Login Form -->
    <a href='../../php/login.php'>Voltar</a>
    <h1>Informe seus Dados</h1>
    <form action= "../modules/verifique_cadastro.php" method= "POST" enctype="multipart/form-data" id="form">
    
      <label class="labelUsu" style="color: #cccccc">Nome:</label><br>  
      <input type="text" id="nome_usuario" class="fadeIn second" name="nome_usuario" placeholder="Insira seu Nome" required>
      <label class="labelUsu" style="color: #cccccc">Sobrenome:</label><br>  
      <input type="text" id="sobrenome_usuario" class="fadeIn second" name="sobrenome_usuario" placeholder="Insira seu Sobrenome" required><br>
      <label class="labelUsu" style="color: #cccccc">Email:</label><br>
      <input type="email" id="email_usuario" class="fadeIn second" name="email_usuario" placeholder="Informe seu email:" required>
      <label class="labelUsu" style="color: #cccccc">Telefone:</label><br>
      <input type="tel" id="telefone" class="fadeIn second" name="telefone" placeholder="(XX) XXXXX-XXXX" maxlength="9" required>
      <label class="labelUsu" style="color: #cccccc">Data de Nascimento:</label><br>
      <input type="date" id="dtaNascimento" class="fadeIn second" name="dtaNascimento" required>
      <label class="labelUsu" style="color: #cccccc">Defina sua senha:</label>
      <input type="password" id="password" class="fadeIn third" name="password" maxlength="8" placeholder="Máximo 8 caracteres" required>
      <label class="labelUsu" style="color: #cccccc">Confirme sua senha:</label>
      <input type="password" id="password_confirma" class="fadeIn third" name="password_confirma" maxlength="8" required>
      <hr>
        <input type="submit" id="submit" name="submit" class="fadeIn fourth"value="Enviar dados"onClick= "validaSenha()" onclick="<?php $_SESSION["mensagemWrng"]='' ?>">
      </form>
  </div>
</div>
<script type="text/javascript">
  var password = document.getElementById("password");
   var password_confirma = document.getElementById("password_confirma");

  function validaSenha(){
    if(password.value != password_confirma.value) {
      password_confirma.setCustomValidity("Senhas diferentes!");
    } else {
      password_confirma.setCustomValidity('');
    }
  }

  // password.onchange = validatePassword;
  // password_confirma.onkeyup = validatePassword;

</script>
</body>
</html>
