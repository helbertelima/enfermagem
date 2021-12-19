<?php include_once '../public/dependencias.php'?>


<div class="container"><br>

    <h1 class="text-center"> <img src="../imgs/logobk.png" width="80" height="80" alt="alt"/></h1>
    <h2 class="text-center"> <i class="fa fa-id-card-alt"></i> CADASTRAR PACIENTE </h2><hr>

        <form method="post" action="../controller/inserir_paciente.php">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                RA: <input class="form-control" type="text" name="ra" required autofocus>
            </div>
            <div class="col-md-10">
                Nome: <input class="form-control" type="text" name="nome" required autofocus>
            </div>
            <div class="col-md-3"><br>
                Data de Nascimento: 
                <input class="form-control" type="date" name="dtnascimento" required>
            </div>
            <div class="col-md-3"><br>
                Telefone:
                <input class="form-control" type="text" name="telefone" required id="phone">
            </div>
            <div class="col-md-3"><br>
                Turma:
                <input class="form-control" type="text" name="turma" required >
            </div>
            
            <div class="col-md-3"><br>
                Quarto:
                <input class="form-control" type="text" name="quarto" id="quarto">
            </div>
            <div class="col-md-6"><br>
                Departamento: 
                <input class="form-control" type="text" name="departamento"><br>
            </div>
            <div class="col-md-6"><br>
                Plano de Saúde:
                <input class="form-control" type="text" name="plano_saude"<br>
            </div> <hr>
            <div class="text-center">
                <a class="btn btn-success btn-xs" href="../index.php">
                     <i class="fa fa-arrow-circle-left"></i> Cancelar Cadastro
                </a>
          
                <button class="btn btn-primary btn-xs">
                    Confirmar Cadastro <i class="fa fa-user-plus"></i>
                </button>
            </div>
        </div>
    </div>
</form>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

<script type="text/javascript">
    $(document).ready(function (){
        $("#cpf").mask("000.000.000-00");
        $("#phone").mask("(00) 00000-0000");
    });
</script>