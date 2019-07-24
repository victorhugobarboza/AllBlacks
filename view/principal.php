<?php
include('../include/header.php');
include('../include/lateral.php');
include('../conecta.php');
?>        
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>            
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
    </div>
    <?php
    $query = mysqli_query($conn, 'SELECT torcedor_id FROM tb_torcedor');
    $total = mysqli_num_rows($query);
    
    
    $query1 = mysqli_query($conn, 'SELECT torcedor_id FROM tb_torcedor where torcedor_ativo = 0');
    $totalinativos = mysqli_num_rows($query1);
    
    $query2 = mysqli_query($conn, 'SELECT torcedor_id FROM tb_torcedor where torcedor_ativo = 1');
    $totalativos = mysqli_num_rows($query2);
    ?>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>Torcedors Cadastrados</h4>
                    <p><b><?= $total; ?></b></p>
                </div>
            </div>
        </div>        
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
                <div class="info">
                    <h4>Torcedores Inativos</h4>
                    <p><b><?= $totalinativos; ?></b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                    <h4>Torcedores Ativos</h4>
                    <p><b><?= $totalativos; ?></b></p>
                </div>
            </div>
        </div>
    </div>    
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">AllBlacks</h3>
                <ul>
                    <li>Cadastro de Torcedores</li>
                    <li>Criação de novos perfís</li>
                    <li>Importação de Registos da loja</li>
                    <li>Envio de E-mail</li>                    
                </ul>
                <p>Sistema de gestão de torcedores do time AllBlacks.</p>
            </div>
        </div>
        
    </div>
</main>
<?php
include('../include/footer.php');
?>
    