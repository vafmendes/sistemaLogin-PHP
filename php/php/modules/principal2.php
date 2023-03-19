<?php
    include('../modules/config.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Principal</title>
</head>
<body>

    <?php 

    if($_SESSION["verificar"] == true){
    ?>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Principal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(atual)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Desativado</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="#">Item</a>
                <a class="dropdown-item" href="#">Outro item</a>
                <a class="dropdown-item" href="#">Algum outro item</a>
                </div>
            </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Pesquisa" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form> -->
        </div>
        </nav>

    <main role="main">

        <!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
        <div class="jumbotron">
            <div class="container">
            <h1 class="display-3">Olá, <?php echo $_SESSION["nome"]; ?></h1>
            <p></p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais &raquo;</a></p>
            </div>
        </div>

        <div class="container">
            <!-- Exemplo de linha de colunas -->
            <div class="row">
            <div class="col-md-4">
                    <h2>Projetos</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis labore voluptatem ipsa nam fugit quidem ex maxime ipsam suscipit error, quod velit nisi sapiente nesciunt</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Projetos</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam rerum dolor quam officia cum incidunt impedit deserunt libero voluptates provident? Optio quaerat illo dolor quam nostrum expedita pariatur mollitia atque.</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Projetos</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quisquam aliquam quis doloribus dolor, consequuntur soluta, culpa ex deleniti tempore amet excepturi ipsa non modi, ut hic neque sapiente libero?</p>
                    <p><a class="btn btn-secondary" href="#" role="button">Ver detalhes &raquo;</a></p>
                </div>
            </div>

            <hr>

            <?php if(isset($_SESSION["verificar"])){?>
            <a href="../login.php">
                <i class="uil uil-sign-out-alt"></i>
                <span class="link-name">Sair</span>
            </a>
            <?php unset($_SESSION["verificar"]); ?>
            <?php }else{ ?>
                    <?php echo "Erro"; }?>


        </div> <!-- /container -->

    </main>

        <footer id="rod" class="container">
        <p>&copy; Companhia 2022</p>
        </footer>
        <?php
            } else{
                header('Location:../login.php');
            }

        ?>









    <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>    
</body>
</html>