<?php

class Usuario{

    public function login($usuario, $senha){
        global $conexao_pdo;

        $query = "SELECT id, nome_usuario, senha_usuario FROM tabela_login WHERE nome_usuario = :nomeLogin AND senha_usuario = :senhaLogin LIMIT 1";

        $resultado = $conexao_pdo->prepare($query);
        $resultado->bindParam(":nomeLogin", $usuario);
        $resultado->bindParam(":senhaLogin", $senha);
        $resultado->execute();

        if($resultado->rowCount() != 0){
            $login_usuario = $resultado->fetch();
            $_SESSION['id'] = $login_usuario['id'];
            $_SESSION['nome'] = $login_usuario['nome_usuario'];

            return true;
        }else{
           return false;

        }

    }
    public function cadastro($nomeCad, $sobrenome, $email, $telefone, $data_nascimento, $senhaCad){
        global $conexao_pdo;

        $query = "SELECT id FROM tabela_login WHERE email = :email";


        $procuraLogin = $conexao_pdo->prepare($query);
        $procuraLogin->bindParam(":email", $email);
        $procuraLogin->execute();



        $queryCad = "INSERT INTO tabela_login (nome_usuario, sobrenome_usuario, email, telefone, data_nascimento, senha_usuario)
                          VALUES (:nome, :sobrenome, :email, :telefone, :data_nascimento, :senha)";
        

        $res = $conexao_pdo->prepare($queryCad);
        $res -> bindValue(":nome", $nomeCad);
        $res -> bindValue(":sobrenome", $sobrenome);
        $res -> bindValue(":email", $email);
        $res -> bindValue(":telefone", $telefone);
        $res -> bindValue(":data_nascimento", $data_nascimento);
        $res -> bindValue(":senha", password_hash($senhaCad, PASSWORD_DEFAULT));


        

        if($procuraLogin->rowCount() == 0 ){
            $login_usuario = $procuraLogin->fetch();
            $res ->execute();
            return true;
        }else{
            return false;

        }

    }

    

}



?>