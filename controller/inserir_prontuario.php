<?php
include_once '../model/Conexao.php';
include_once '../model/Gerenciamento.php';

$gerenciamento = new Manager();

$data = $_POST;

if(isset($data) && !empty($data)){
    $gerenciamento->inserirProntuario("prontuarios", $data);

    header("Location: ../index.php?");
}