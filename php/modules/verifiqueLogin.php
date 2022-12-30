<?php



if(isset($_POST['nomeLogin']) && !empty($_POST['nomeLogin']) && isset($_POST['senhaLogin']) && !empty($_POST['senhaLogin'])){
  require("config.php");
  require("usu.class.php");
  require("mens.class.php");

  $usu = new Usuario();
  $mensg = new Mensagem(); 
  $_SESSION["verificar"] = false;  


  $usuario = addslashes($_POST['nomeLogin']);
  $senha = addslashes($_POST['senhaLogin']);

  if($usu->login($usuario, $senha) == true){
    if(isset($_SESSION["id"])){
      // header("Location: /php/principal.html");
      ?>

<style>
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
}
.modal-content {
  background-color: #fefefe;
  margin: 10% auto;
  margin-left: 24%;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
<div id='myModal' class='modal' style='display:block;'>
  <div class='modal-content'>
    <span class='close' title='botao fechar caixa de dialogo'>&times;</span>
    <p style='color:red; font-size:30px; text-align:center;'>ATEN&Ccedil;&Atilde;O!</p>
    <p style='text-align:justify; font-size:20px;'><b>Aguarde o carregamento do sistema...</b></p>         
  </div>
</div>
<div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">
  <h2>Tada!</h2>
  <p>Some text in my newly loaded page..</p>
</div>
<script>
  setTimeout(function(){ window.location.href='/php/modules/principal2.php';  }, 2000);
</script>



      <?php
      // echo"<script src='../js/script.js'></script>";
      // echo "<div id='loader'class='spinner-border' role='status'><span class='visually-hidden'>Loading...</span></div>";
      //echo"<script>window.location.href='/php/modules/principal2.php';</script>";-----------------------------------------------------|set_time_limit(20);|
      // echo "<script>alert('Seja bem vindo ".$_SESSION["nome"]."');window.location.href='/php/modules/principal2.php';</script>";
      $_SESSION["verificar"] = true;
      $_SESSION["nome"];
    }
  }elseif($mensg->senhaInvalida() == true){
    header("Location: ../login.php");
    $_SESSION["mensagemStr"] = '<div class="alert alert-danger" role="alert"> Senha Invalida. Por favor verifique... </div>';  
  }
  
}else{
  if(!isset($_SESSION)){ session_start(); }
  header("Location: ../login.php");
  $_SESSION["mensagemStr"] = '<div class="alert alert-danger" role="alert"> Informe login e senha </div>';  
}




?>