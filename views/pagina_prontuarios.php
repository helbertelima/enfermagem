<?php
include_once '../public/dependencias.php';
include_once '../model/Conexao.php';
include_once '../model/Gerenciamento.php';

$m = new Manager();

$id_paciente = $_POST['id_paciente'];

?>



<div class="container"><br>
    
<h1 class="text-center"> <img src="../imgs/logobk.png" width="80" height="80" alt="alt"/></h1>
<h2 class="text-center">INFORMAÇÕESPACIENTE <i class="fa fa-List"></i></h2><hr>

<form method="post" action="../controller/inserir_prontuario.php">
    <div class="container">
        <div class="row">

            <?php foreach ($m->getInfo('pacientes', $id_paciente) as $c):?>
            
 <?php
 //Conversão da Data de Nascimento
$data_timestamp = strtotime($c ["dtnascimento"]);
$data_formatada = date("d/m/Y", $data_timestamp);

?>
            
            <div class="col-md-2">
                <b>RA:</b> 
                <?php echo $c['ra']?><br><br>
            </div>
            <div class="col-md-10">
                <b>Nome:</b> 
                <?php echo $c['nome']?><br><br>
            </div>
            <div class="col-md-3">
                <b>Data de Nascimento:</b> 
                <?php echo $data_formatada?><br><br>
 
            </div>
            <div class="col-md-3">
                <b>Telefone:</b>
                <?php echo $c['telefone']?><br><br>
            </div>
            <div class="col-md-3">
                <b>Turma:</b> 
                <?php echo $c['turma']?><br><br>
            </div>
            <div class="col-md-3">
                <b>Quarto:</b> 
                <?php echo $c['quarto']?><br><br>
            </div>
            <div class="col-md-6">
                <b>Departamento:</b> 
                <?php echo $c['departamento']?><br><br>
            </div><!-- comment -->
            <div class="col-md-6">
                <b>Plano de Saúde:</b> 
                <?php echo $c['plano_saude']?><br><br>
            </div><hr>
            
            <h2 class="text-center"><b>INSERIR PRONTUÁRIO</b> <i class="fa fa-List"></i></h2><hr>   
            
            
        <div class="container">
        <div class="row">
            <div class="col-md-2">
                Inicio do Atendimento: <input class="form-control" type="date" name="data_inicial" required autofocus>
            </div>
            <div class="col-md-2">
                Fim do Atendimento: <input class="form-control" type="date" name="data_final" required autofocus>
            </div>
            <div class="col-md-8">
                Nome do acompanhante: <input class="form-control" type="text" name="acompanhante" required autofocus>
            </div>
            <div class="col-md-2"><br>
                Queixa: <input class="form-control" type="text" name="queixa" required autofocus>
            </div>
            <div class="col-md-2"><br>
                P.A: <input class="form-control" type="text" name="pa" required autofocus>
            </div>
            <div class="col-md-2"><br>
                F.C: <input class="form-control" type="text" name="fc" required autofocus>
            </div>
            <div class="col-md-2"><br>
            Saturação: <input class="form-control" type="text" name="saturacao" required autofocus>
            </div>
            <div class="col-md-2"><br>
                D.X: <input class="form-control" type="text" name="dx" required autofocus>
            </div>
            <div class="col-md-2"><br>
                F.R: <input class="form-control" type="text" name="fr" required autofocus>
            </div>
            <div class="col-md-6"><br>
            Evolução: <input class="form-control" type="text" name="evolucao">
            </div>
            <div class="col-md-6"><br>
                Obs: <input class="form-control" type="text" name="obs">
            </div>
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