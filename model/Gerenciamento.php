<?php

class Manager extends Conexao
{

    public function inserirPaciente($table, $data)
    {
        $pdo = parent::get_instance();
        $fields = implode(", ", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));
        $sql = "INSERT INTO $table ($fields) VALUES ($values)";
        $statement = $pdo->prepare($sql);
        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value, PDO::PARAM_STR);
        }
        $statement->execute();
    }
    
        public function inserirProntuario($table, $data)
    {
        $pdo = parent::get_instance();
        $fields = implode(", ", array_keys($data));
        $values = ":" . implode(", :", array_keys($data));
        $sql = "INSERT INTO $table ($fields) VALUES ($values)";
        $statement = $pdo->prepare($sql);
        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value, PDO::PARAM_STR);
        }
        $statement->execute();
    }

    public function listarPaciente($table)
    {
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM $table  ORDER BY nome ASC";
        $statement = $pdo->query($sql);
        $statement->execute();

        return $statement->fetchAll();
    }

    public function atualizarPaciente($table, $data, $id_paciente)
    {
        $pdo = parent::get_instance();
        $new_values = "";
        foreach ($data as $k => $v) {
            $new_values .= "$k=:$k, ";
        }
        $new_values = substr($new_values, 0, -2);
        $sql = "Update $table SET $new_values WHERE id_paciente = :id_paciente";
        $stmt = $pdo->prepare($sql);
        foreach ($data as $k => $v) {
            $stmt->bindValue("$k", $v, PDO::PARAM_STR);
        }
        $stmt->execute();
    }

    public function getInfo($table, $id_paciente)
    {
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM $table WHERE id_paciente = :id_paciente";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":id_paciente", $id_paciente);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
        public function getInfo2($table, $id_prontuario)
    {
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM $table WHERE id_prontuario = :id_paciente";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":id_prontuario", $id_prontuario);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function deletarPaciente($table, $id_paciente){
        $pdo = parent::get_instance();
        $sql = "DELETE FROM $table WHERE id_paciente = :id_paciente";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":id_paciente", $id_paciente);
        $stmt->execute();
    }
}