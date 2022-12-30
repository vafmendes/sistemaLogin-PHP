<?php
include("config.php");
if ( ! isset( $conexao_pdo ) || ! is_object( $conexao_pdo ) ) {
	exit('Erro na conexão com o banco de dados.');
}else{
    exit('Banco de dados conectado com sucesso');
}


?>