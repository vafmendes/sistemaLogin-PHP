<?php

session_start();

$base_dados = 'banco_login';
$usuario_bd = 'root';
$senha_bd = '';
$host_bd = 'localhost:3312';
$charset_bd = 'UTF8';

$detalhes_pdo  = 'mysql:host=' . $host_bd . ';';
$detalhes_pdo .= 'dbname='. $base_dados . ';';
$detalhes_pdo .= 'charset=' . $charset_bd . ';';

global $conexao_pdo;

// //Sites utilizados para pesquisa
// // https://www.todoespacoonline.com/w/2014/07/login-simples-com-php/
// // https://www.youtube.com/watch?v=15CXhnQkilY&list=PLSHNk_yA5fNjoIRNHV-3FprsN3NWPcnnK&index=4
// // https://www.youtube.com/watch?v=8c7PEWcQi7U


// // $conexao_pdo = new PDO("mysql:dbname=vagas_emprego;host=127.0.0.1:3312","root","");

try {
    // Cria a conexão PDO com a base de dados
    $conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);
} catch (PDOException $e) {
    // Se der algo errado, mostra o erro PDO
    echo "Erro: " . $e->getMessage() . "<br/>";
   
    // Mata o script
    die();
}


?>