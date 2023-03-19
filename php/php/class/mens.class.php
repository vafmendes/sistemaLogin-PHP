<?php

    class Mensagem{
        public function senhaInvalida($usuario, $senha){
            global $conexao_pdo;

            $query = "SELECT id, nome_usuario, senha_usuario FROM tabela_login WHERE nome_usuario = :nomeLogin AND senha_usuario = :senhaLogin LIMIT 1";

            $resultado = $conexao_pdo->prepare($query);
            $resultado->bindParam(":nomeLogin", $usuario);
            $resultado->bindParam(":senhaLogin", $senha);
            $resultado->execute();
            if($query){
                $login_usuario = $resultado->fetch();
                                
                if($login_usuario){
                    $retorno = $login_usuario["senha_usuario"];
                }else{
                    $retorno ='0'; 
                }
                
                if( $senha != $retorno ){
                    return true;
                }else{
                    return false;
                }

            }else{

                echo "Página não encontrada";

            }

        }

    }



?>