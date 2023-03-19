<?php



if(isset($_POST['nomeLogin']) && !empty($_POST['nomeLogin']) && isset($_POST['senhaLogin']) && !empty($_POST['senhaLogin'])){
  require("config.php");
  require("../class/usu.class.php");
  require("../class/mens.class.php");

  $usu = new Usuario();
  $mensg = new Mensagem(); 
  $_SESSION["verificar"] = false; 
  
  //echo"<script>alert(".$_POST['senhaLogin'].") </script>";


  $usuario = addslashes($_POST['nomeLogin']);
  $senha = addslashes($_POST['senhaLogin']);


  if($usu->login($usuario, $senha) == true){
    if(isset($_SESSION["id"])){
      ?>

      <link rel="stylesheet" href="../css/loading.css">

      <div id='myModal' class='modal' style='display:block;'>
        <div class='modal-content'>
          <p style='color:red; font-size:30px; text-align:center;'>ATEN&Ccedil;&Atilde;O!</p>
          <p style='text-align:justify; font-size:20px;'>
            <b>Aguarde o carregamento do sistema...</b>
          </p>         
        </div>
      </div>
      <!-- Div da spin de carregamento -->
      <!--<div id="loader" style="margin-top: 150px;"></div>-->
      <script>
        setTimeout(function(){ window.location.href='/php/modules/principal2.php'; }, 2000);
      </script>
      <?php
      //header("Location: /php/modules/principal2.php");
      $_SESSION["verificar"] = true;
      $_SESSION["nome"];
      
    }
  }elseif($mensg->senhaInvalida($usuario, $senha) == true){
    header("Location: ../login.php");
    $_SESSION["mensagemStr"] = '<div class="alert alert-danger" role="alert"> Senha Invalida. Por favor verifique... </div>';  
  }
  
}else{
  if(!isset($_SESSION)){ session_start(); }
  header("Location: ../login.php");
  $_SESSION["mensagemStr"] = '<div class="alert alert-danger" role="alert"> Informe login e senha </div>';  
}




?>