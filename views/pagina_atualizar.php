<?php
include_once '../public/dependencias.php';
include_once '../model/Conexao.php';
include_once '../model/Gerenciamento.php';

$m = new Manager();

$id_paciente = $_POST['id_paciente'];
?>

<div class="container"><br>
    
<h1 class="text-center"> <img src="../imgs/logobk.png" width="80" height="80" alt="alt"/></h1>
<h2 class="text-center">ALTERAR DADOS DO PACIENTE <i class="fa fa-List"></i></h2><hr>

<form method="post" action="../controller/atualizar_paciente.php">
    <div class="container">
        <div class="row">

            <?php foreach ($m->getInfo('pacientes', $id_paciente) as $c):?>
            <div class="col-md-2">
                RA: 
                <input class="form-control" type="text" name="ra" required autofocus value="<?= $c['ra']?>"><br>
            </div>
            <div class="col-md-10">
                Nome: 
                <input class="form-control" type="text" name="nome" required value="<?= $c['nome']?>"><br>
            </div>
            <div class="col-md-3">
                Data de Nascimento: 
                <input class="form-control" type="text" name="dtnascimento" required id="cpf" value="<?= $c['dtnascimento']?>"><br>
            </div>
            <div class="col-md-3">
                Telefone:
                <input class="form-control" type="text" name="telefone" required value="<?= $c['telefone']?>"><br>
            </div>
            <div class="col-md-3">
                Turma: 
                <input class="form-control" type="text" name="turma" required id="phone" value="<?= $c['turma']?>"><br>
            </div>
            <div class="col-md-3">
                Quarto: 
                <input class="form-control" type="text" name="quarto" value="<?= $c['quarto']?>"><br>
            </div>
            <div class="col-md-6">
                Departamento: 
                <input class="form-control" type="text" name="departamento"  value="<?= $c['departamento']?>"><br>
            </div><!-- comment -->
            <div class="col-md-6">
                Plano de Saúde: 
                <input class="form-control" type="text" name="plano_saude" value="<?= $c['plano_saude']?>"><br>
            </div><hr>
            <input type="hidden" name="id_paciente" value="<?= $c['id_paciente']?>">
            <?php endforeach;?>
            <div class="text-center">
                <a class="btn btn-success btn-xs" href="../index.php">
                     <i class="fa fa-arrow-circle-left"></i> Cancelar Alteração
                </a>
          
                <button class="btn btn-primary btn-xs">
                    Confirmar Alteração <i class="fa fa-user-plus"></i>
                </button>
            </div>
        </div>
    </div>
</form>