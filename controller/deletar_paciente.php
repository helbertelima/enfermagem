<?php
include_once '../model/Conexao.php';
include_once '../model/Gerenciamento.php';

$manager = new Manager();

$id_paciente = $_POST['id_paciente'];

if(isset($id_paciente) && !empty($id_paciente)){
    $manager->deletarPaciente("pacientes", "$id_paciente");

    header("Location: ../index.php?costumer_deleted");
}