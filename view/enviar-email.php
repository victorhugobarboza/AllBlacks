<?php
include ('../include/header.php');
include ('../include/lateral.php');
include ('../controller/logica.php');
?>

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> Envio de E-mail</h1>
            <p>Sample forms</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Formulário</li>
            <li class="breadcrumb-item"><a href="#">Formulário de E-mail</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Formulário de E-mail</h3>
                <div class="tile-body">
                    <form class="form" action="../controller/envia-email.php" method="POST">
                        <div class="form-group">
                            <label class="control-label">Assunto</label>
                            <input class="form-control" type="text" placeholder="Assunto do e-mail" name="assunto">
                        </div>                        
                        <div class="form-group">
                            <label class="control-label">Mensagem</label>
                            <textarea type="text" class="form-control" rows="10" cols="30" maxlength="20" id="txtArtigo" name="mensagem"></textarea>
                        </div>                 
                        <input class="btn btn-primary" type="submit" value="Enviar">
                    </form>
                </div>
                <div class="tile-footer">

                </div>
            </div>
        </div>
    </div>
</main>

<?php
include ('../include/footer.php');
?>

