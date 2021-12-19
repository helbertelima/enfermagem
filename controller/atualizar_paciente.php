<?php
include_once '../model/Conexao.php';
include_once '../model/Gerenciamento.php';

$gerenciamento = new Manager();

$update = $_POST;
$id_paciente = $_POST['id_paciente'];

if(isset($id_paciente) && !empty($id_paciente)){
    $gerenciamento->atualizarPaciente("pacientes", $update, $id_paciente);

    header("Location: ../index.php?costumer_updated");
}