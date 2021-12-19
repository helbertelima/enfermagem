<?php
include_once 'model/Conexao.php';
include_once 'model/Gerenciamento.php';
include_once 'public/helper.php';

$manager = new Manager();

?>


<!DOCTYPE html>
<html>
<head>
    <?php include_once 'public/dependencias.php' ?>
</head>
<body>
    <div class="container"><br>

        <h1 class="text-center"> <img src="imgs/logobk.png" width="80" height="80" alt="alt"/></h1>
        <h2 class="text-center"> <i class="fa fa-users"></i> PACIENTES ATENDIDOS </h2><hr>

   

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>R.A</th>
                    <th>NOME</th>
                    <th>NASC</th>
                    <th>TELEFONE</th>
                    <th>TURMA</th>
                    <th>QUARTO</th>
                    <th>DEPARTAMENTO</th>
                    <th>PLANO DE SAÚDE</th>
                    <th colspan="3">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($manager->listarPaciente('pacientes') as $c):?>
                <tr>
                    <td><?= $c['ra']; ?></td>
                    <td><?= $c['nome']; ?></td>
                    <td><?= formatDate($c['dtnascimento']); ?></td>
                    <td><?= $c['telefone']; ?></td>
                    <td><?= $c['turma']; ?></td>
                    <td><?= $c['quarto']; ?></td>
                    <td><?= $c['departamento']; ?></td>
                    <td><?= $c['plano_saude']; ?></td>
                    <td>
                       
                        <form method="POST" action="views/pagina_prontuarios.php">
                            <input type="hidden" name="id_paciente" value="<?= $c['id_paciente']?>">
                            <button class="btn btn-info btn-xs botao">
                                <i class="fa fa-list"></i> Prontuário
                            </button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="views/pagina_atualizar.php">
                            <input type="hidden" name="id_paciente" value="<?= $c['id_paciente']?>">
                            <button class="btn btn-warning btn-xs botao">
                                <i class="fa fa-user-edit"></i> Alterar
                            </button>
                        </form>
                    </td>
                    <td>
                       
                        <form method="POST" action="views/pagina_consulta.php">
                            <input type="hidden" name="id_paciente" value="<?= $c['id_paciente']?>">
                            <button class="btn btn-success btn-xs botao">
                                <i class="fa fa-list"></i> Consulta
                            </button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="controller/deletar_paciente.php" onclick="return confirm('Tem certeza que você deseja excluir esta informação?')">
                            <input type="hidden" name="id_paciente" value="<?= $c['id_paciente']?>">
                            <button class="btn btn-danger btn-xs botao">
                                <i class="fa fa-trash"></i> Excluir
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
                <div>
            <h5 class="text-center">   
                <a href="views/pagina_cadastro.php" class="btn btn-primary btn-xs" type="button"> <i class="fa fa-plus-circle"></i> Cadastrar Novo Paciente</a>
           </h5>
    </div><br>

</div>
</body>
</html>