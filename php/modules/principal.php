<?php
include('../modules/config.php');

/*if(isset("verifiqueLogin.php")){
    require("config.php");
    require("usu.class.php");
    require("mens.class.php");
  
    $usu = new Usuario();
    $mensg = new Mensagem(); 
  
    $usuario = addslashes($_POST['nomeLogin']);
    $senha = addslashes($_POST['senhaLogin']);
  
    if($usu->login($usuario, $senha) == true){
        // header("Location: /php/principal.html");
        echo "<script>alert('Seja bem vindo ".$_SESSION["nome"]."');window.location.href='/php/modules/principal.php';</script>";
    }
    
  }else{
    echo "<script>alert('Informe login e senha');window.location.href='../login.php';</script>";
    // $alerta =  "<script language='javascript' type='text/javascript'>alert('Informe login e senha');</>";
    // echo $alerta;
    // header("Location: login.php");
    
  }


*/





// require("config.php");
// require("usu.class.php");

// if((!empty($_SESSION['id']))){
//     // header("Location: /php/principal.html");
//     echo "<script>window.location.href='../modules/principal.php';</script>";
//   }else{
//     include("../modules/verifiqueLogin.php");
//   }
// require("usu.class.php");
// if($_SESSION['id'] == ""){
//     echo "<script> window.location.href='/modules/principal.php';</script>";
// }

// if(isset($_POST['nomeLogin']) && !empty($_POST['nomeLogin']) && isset($_POST['senhaLogin']) && !empty($_POST['senhaLogin'])){
//   require("config.php");
  


//   $usuario = addslashes($_POST['nomeLogin']);
//   $senha = addslashes($_POST['senhaLogin']);

//   if($usu->login($usuario, $senha) == false){
//     if(isset($_SESSION["id"])){
//       // header("Location: /php/principal.html");
//       echo "<script>alert('Informe login e senha');window.location.href='../login.php';</script>";
//       echo "<script> window.location.href='/modules/verifiqueLogin.php';</script>";
//     }
//   }else{
//   echo "<script>alert('Informe login e senha');window.location.href='../login.php';</script>";
//   echo "<script> window.location.href='/modules/principal.php';</script>";
//   // $alerta =  "<script language='javascript' type='text/javascript'>alert('Informe login e senha');</>";
//   // echo $alerta;
//   // header("Location: login.php");

// }
// }
?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Style -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="../css/global.css">
    <title>Painel de Controle</title>
</head>

<body>

<?php 

    if($_SESSION["verificar"] == true){
    ?>

<nav>
        <div class="logo">
            <div class="logo-image">
                <img src="image/logo.png" alt="" />
            </div>
            <span class="logo-name">Hospital</span>
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Início</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Pacientes</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-calender"></i>
                    <span class="link-name">Agênda</span>
                </a></li>
                
                <li><a href="#">
                    <i class="uil uil-stethoscope"></i>
                    <span class="link-name">Serviços</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-clock-three"></i>
                    <span class="link-name">Relógio de ponto</span>
                </a></li>
            </ul>
            <ul class="logout-mode">
                <?php if(isset($_SESSION["verificar"])){?>
                <li><a href="../login.php">
                    <i class="uil uil-sign-out-alt"></i>
                    <span class="link-name">Sair</span>
                </a></li>
                <?php unset($_SESSION["verificar"]); ?>
                <?php }else{ ?>
                    <?php echo "Erro"; }?>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark</span>
                    </a>
                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <header>
        <i class="uil uil-bars sidebar-toggle"></i>
        <div class="perfil">
            <i class="uil uil-user"></i>
            <div class="user-name">
                Amanda Santos
            </div>
        </div>
    </header>
    <section class="dashboard">
        <div class="dash-content">
            <div class="overview">
                <div class="dash-title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-calender"></i>
                        <span class="text">Agêndamento</span>
                        <span class="number">10</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-stethoscope"></i>
                        <span class="text">Serviços</span>
                        <span class="number">10</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-users-alt"></i>
                        <span class="text">Pacientes atendido</span>
                        <span class="number">10</span>
                    </div>
                </div>
                <div class="scheduling-list">
                    <div class="dash-title">
                        <i class="uil uil-calender"></i>
                        <span class="text">Últimos Agendamentos</span>
                    </div>
                    <div class="scheduling-data">
                        <div class="data names">
                            <span class="data-title">Nome</span>
                            <span class="data-list">Rubens</span>
                            <span class="data-list">Rubens</span>
                            <span class="data-list">Rubens</span>
                            <span class="data-list">Rubens</span>
                            <span class="data-list">Rubens</span>
                        </div>
                        <div class="data emails">
                            <span class="data-title">email</span>
                            <span class="data-list">rubens@gmail.com</span>
                            <span class="data-list">rubens@gmail.com</span>
                            <span class="data-list">rubens@gmail.com</span>
                            <span class="data-list">rubens@gmail.com</span>
                            <span class="data-list">rubens@gmail.com</span>
                        </div>
                        <div class="data schedulings">
                            <span class="data-title">data</span>
                            <span class="data-list">01/10/2022</span>
                            <span class="data-list">01/10/2022</span>
                            <span class="data-list">01/10/2022</span>
                            <span class="data-list">01/10/2022</span>
                            <span class="data-list">01/10/2022</span>
                        </div>
                        <div class="data actions">
                            <span class="data-title">Ação</span>
                            <span class="data-list">
                                <button class="add"><i class="uil uil-pen"></i></button>
                                <button class="delete"><i class="uil uil-trash-alt"></i></button>
                            </span>
                            <span class="data-list">
                                <button class="add"><i class="uil uil-pen"></i></button>
                                <button class="delete"><i class="uil uil-trash-alt"></i></button>
                            </span>
                            <span class="data-list">
                                <button class="add"><i class="uil uil-pen"></i></button>
                                <button class="delete"><i class="uil uil-trash-alt"></i></button>
                            </span>
                            <span class="data-list">
                                <button class="add"><i class="uil uil-pen"></i></button>
                                <button class="delete"><i class="uil uil-trash-alt"></i></button>
                            </span>
                            <span class="data-list">
                                <button class="add"><i class="uil uil-pen"></i></button>
                                <button class="delete"><i class="uil uil-trash-alt"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="list-home">
                    <div class="user-list">
                        <div class="dash-title">
                            <i class="uil uil-stethoscope"></i>
                            <span class="text">Lista de Serviços</span>
                        </div>
                        <div class="user-data">
                            <div class="data names">
                                <span class="data-title">Tipo</span>
                                <span class="data-list">Exames</span>
                                <span class="data-list">Exames</span>
                                <span class="data-list">Exames</span>
                                <span class="data-list">Exames</span>
                                <span class="data-list">Exames</span>
                            </div>
                            
                            <div class="data offices">
                                <span class="data-title">Sala</span>
                                <span class="data-list">17A</span>
                                <span class="data-list">18A</span>
                                <span class="data-list">12B</span>
                                <span class="data-list">5A</span>
                                <span class="data-list">4D</span>
                            </div>
                            <div class="data actions">
                                <span class="data-title">Ação</span>
                                <span class="data-list">
                                    <button class="add"><i class="uil uil-pen"></i></button>
                                    <button class="delete"><i class="uil uil-trash-alt"></i></button>
                                </span>
                                <span class="data-list">
                                    <button class="add"><i class="uil uil-pen"></i></button>
                                    <button class="delete"><i class="uil uil-trash-alt"></i></button>
                                </span>
                                <span class="data-list">
                                    <button class="add"><i class="uil uil-pen"></i></button>
                                    <button class="delete"><i class="uil uil-trash-alt"></i></button>
                                </span>
                                <span class="data-list">
                                    <button class="add"><i class="uil uil-pen"></i></button>
                                    <button class="delete"><i class="uil uil-trash-alt"></i></button>
                                </span>
                                <span class="data-list">
                                    <button class="add"><i class="uil uil-pen"></i></button>
                                    <button class="delete"><i class="uil uil-trash-alt"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="user-list">
                        <div class="dash-title">
                            <i class="uil uil-users-alt"></i>
                            <span class="text">Lista de Pacientes</span>
                        </div>
                        <div class="user-data">
                            <div class="data names">
                                <span class="data-title">Nome</span>
                                <span class="data-list">Rubens</span>
                                <span class="data-list">Rubens</span>
                                <span class="data-list">Rubens</span>
                                <span class="data-list">Rubens</span>
                                <span class="data-list">Rubens</span>
                            </div>
                            <div class="data emails">
                                <span class="data-title">email</span>
                                <span class="data-list">rubens@gmail.com</span>
                                <span class="data-list">rubens@gmail.com</span>
                                <span class="data-list">rubens@gmail.com</span>
                                <span class="data-list">rubens@gmail.com</span>
                                <span class="data-list">rubens@gmail.com</span>
                            </div>
                            
                            <div class="data actions">
                                <span class="data-title">Ação</span>
                                <span class="data-list">
                                    <button class="add"><i class="uil uil-pen"></i></button>
                                    <button class="delete"><i class="uil uil-trash-alt"></i></button>
                                </span>
                                <span class="data-list">
                                    <button class="add"><i class="uil uil-pen"></i></button>
                                    <button class="delete"><i class="uil uil-trash-alt"></i></button>
                                </span>
                                <span class="data-list">
                                    <button class="add"><i class="uil uil-pen"></i></button>
                                    <button class="delete"><i class="uil uil-trash-alt"></i></button>
                                </span>
                                <span class="data-list">
                                    <button class="add"><i class="uil uil-pen"></i></button>
                                    <button class="delete"><i class="uil uil-trash-alt"></i></button>
                                </span>
                                <span class="data-list">
                                    <button class="add"><i class="uil uil-pen"></i></button>
                                    <button class="delete"><i class="uil uil-trash-alt"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    } else{
        header('Location:../login.php');
    }

?>

    <script src="../js/script.js"></script>
</body>
</html>