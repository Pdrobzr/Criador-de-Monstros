<?php
class Usuario extends DbConnect
{

    public static function adicionarUsuario($nome, $email, $senha)
    {
        try {
            $pdo = DbConnect::realizarConexao();
            $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nm_email = ?");
            $stmt->execute(array($email));

            if ($stmt->rowCount() > 0) {
                return false;

            } else {
                $stmt = $pdo->prepare("INSERT INTO usuarios VALUES (null, ?, ?, ?)");
                $stmt->execute(array($nome, $email, $senha));
                return true;
            }
        } catch (PDOException $e) {
            echo "Erro com o banco de dados: ";
            
        }
    }

    public static function autenticarUsuario($email , $senha){
        try {
            $pdo = DbConnect::realizarConexao();
            $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nm_email = ?");
            $stmt->execute(array($email));
            if($stmt->rowCount() > 0){
                $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $senhaSegura = $dados['cd_senha'];
                if(password_verify($senha, $senhaSegura)){
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }

    
}
