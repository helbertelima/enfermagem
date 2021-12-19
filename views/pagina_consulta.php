<?php
include_once '../public/dependencias.php';
include_once '../model/Conexao.php';
include_once '../model/Gerenciamento.php';

$m = new Manager();

$id_paciente = $_POST['id_paciente'];

?>



<div class="container"><br>
    
<h1 class="text-center"> <img src="../imgs/logobk.png" width="80" height="80" alt="alt"/></h1>
<h2 class="text-center">INFORMAÇÕES DO PACIENTE <i class="fa fa-List"></i></h2><hr>

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
            </div>
            <div class="col-md-2">
                <b>ID PAC:</b> 
                <?php echo $c['id_paciente']?><br><br>
            </div><hr>
            
            <?php endforeach; ?>
            
            <h2 class="text-center"><b>PRONTUÁRIOS</b> <i class="fa fa-List"></i></h2><hr>   
            
          

         
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Data Inicial</th>
                    <th>Data Final</th>
                    <th>Acompanhante</th>
                    <th>Queixa</th>
                    <th>PA</th>
                    <th>FC</th>
                    <th>Saturação</th>
                    <th>DX</th>
                    <th>FR</th>
                    <th>Evolução</th>
                    <th>Observação</th>
                    <th>ID PAC</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($m->getInfo('prontuarios', $id_paciente) as $j):?>
                <tr>

                    <td><?= $j['data_inicial']; ?></td>
                    <td><?= $j['data_final']; ?></td>
                    <td><?= $j['acompanhante']; ?></td>
                    <td><?= $j['queixa']; ?></td>
                    <td><?= $j['pa']; ?></td>
                    <td><?= $j['fc']; ?></td>
                    <td><?= $j['saturacao']; ?></td>
                    <td><?= $j['dx']; ?></td>
                    <td><?= $j['fr']; ?></td>
                    <td><?= $j['evolucao']; ?></td>
                    <td><?= $j['obs']; ?></td>
                    <td><?= $j['id_paciente']; ?></td>
                    
 
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
                          <div class="text-center">
                <a class="btn btn-success btn-xs" href="../index.php">
                     <i class="fa fa-arrow-circle-left"></i> Voltar
                </a>
          
 
            </div>

    </div>
 </div>
</form>