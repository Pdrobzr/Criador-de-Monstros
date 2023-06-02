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
            echo "Erro com o banco de dados: " . $e;
        }
    }

    public static function autenticarUsuario($email, $senha)
    {
        try {
            $pdo = DbConnect::realizarConexao();
            $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nm_email = ?");
            $stmt->execute(array($email));

            if ($stmt->rowCount() == 1) {
                $dados = $stmt->fetch(PDO::FETCH_OBJ);
                $senhaSegura = $dados->cd_senha;
                if (password_verify($senha, $senhaSegura)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " . $e;
        }
    }

    public static function atualizarUsuario($nome, $email, $senha, $id)
    {
        try {
            $pdo = DbConnect::realizarConexao();
            $stmt = $pdo->prepare("UPDATE usuarios SET nm_usuario = ?, nm_email = ?, cd_senha = ? WHERE id_usuario = ?");
            $stmt->execute(array($nome, $email, $senha, $id));
            if($stmt->rowCount() == 1){
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " . $e;
        }
    }

    public static function deletarUsuario($id){
        try{
            $pdo = DbConnect::realizarConexao();
            $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id_usuario = ?");
            $stmt->execute(array($id));
            if($stmt->rowCount() == 1){
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e){
            echo "Erro com o banco de dados: ". $e;
        }
    }

}