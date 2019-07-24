<?php
include('../include/header.php');
include('../include/lateral.php');
include('../conecta.php');
include('../controller/logica.php');
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> Importar XML</h1>            
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Formulário</li>
            <li class="breadcrumb-item"><a href="#">Formulário de Importação</a></li>
        </ul>
    </div>
<div class="row" style="margin-top: 50px">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <h1 style="text-align: center">Importar Planilha</h1><br>
        <div class="card">
            <div class="card-header" style="text-align: center">Importação dos dados da planilha</div>
            <div class="card-body card-block">
                <form action="../ccontroller/importar-xml.php" method="post" enctype="multipart/form-data" class="form-horizontal">  
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Escolha o arquivo</label></div>
                        <div class="col-12 col-md-12"><input type="file" id="file-input" name="file-input" class="form-control-file"></div>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm" value="Enviar">
                        <i class="fa fa-dot-circle-o"></i> Enviar
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm" value="Limpar">
                        <i class="fa fa-times"></i> Limpar
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
</main>

<?php
include('../include/footer.php');

