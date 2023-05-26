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
        }
    }

    
}
