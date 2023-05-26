<?php

class Treino extends DbConnect
{
    public static function inserirNovoTreino($nomeMusculo, $nomeExercicio, $qtRepeticoes, $qtSeries)
    {
        try {
            $pdo = DbConnect::realizarConexao();
            $stmt = $pdo->prepare("INSERT INTO exercicio VALUES (?, ?, ?, ?, null)");
            $stmt->execute(array($nomeExercicio, $qtSeries, $qtRepeticoes, $nomeMusculo));
        } catch (PDOException $e) {
            echo "Ocorreu um erro: " . $e;
        }
    }

    public static function deletarExercicio($id)
    {
        try {
            $pdo = DbConnect::realizarConexao();
            $stmt = $pdo->prepare("DELETE FROM exercicio WHERE id_exercicio = ?");
            $stmt->execute(array($id));
        } catch (PDOException $e) {
            echo "Ocorreu um erro: " . $e;
        }
    }
}
