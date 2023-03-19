<?php
if(isset($_POST['submit'])){
  include("../modules/config.php");
  require("../class/usu.class.php");

  global $conexao_pdo;


    $usuCad = new Usuario();
    $nomeCad = $_POST["nome_usuario"];
    $sobrenome = $_POST["sobrenome_usuario"];
    $email = $_POST["email_usuario"];
    $telefone = $_POST["telefone"];
    $data_nascimento = $_POST["dtaNascimento"];
    $senhaCad = $_POST["password"];

    

    if($usuCad->cadastro($nomeCad, $sobrenome, $email, $telefone, $_POST["dtaNascimento"], $senhaCad) == true){
      if(!isset($_SESSION)){ session_start(); }
      header("Location: ../login.php");
      $_SESSION["mensagemStr"] = '<div class="alert alert-success" role="alert"> Os dados foram inseridos</div>';
    }else{
      header("Location: ../app/cadastro.php");
      $_SESSION["mensagemWrng"] = '<div class="alert alert-warning" role="alert"><center>Já existe um usuário com este mesmo email</center></div>';
      // echo"<script>alert('Já existe um usuário com este mesmo nome');window.location.href='../app/cadastro.php';</script>";
    }





  }
?>

  