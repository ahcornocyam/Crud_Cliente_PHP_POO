<?php
    require_once "Class/ClienteFactory.php";
    $clientes = new ClienteFactory();

    if(!isset($_GET['ordem'])){
        $_GET['ordem'] = $ordem = 0;
        $class = "glyphicon glyphicon-sort-by-order";
        $clientes->ordemCrescente();
        }elseif($_GET['ordem'] == 0){
            $_GET['ordem'] = $ordem = 1;
        $class = "glyphicon glyphicon-sort-by-order-alt";
        $clientes->ordemDecrescente();
        }elseif($_GET['ordem'] == 1){
        $_GET['ordem'] = $ordem = 0;
        $class = "glyphicon glyphicon-sort-by-order";
        $clientes->ordemCrescente();
    }
    $lista = $clientes->listaClientes();
    define("TOTALCLIENTES", count($lista));
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Listagem Clientes --A.R.M. Projects--</title>
        <!-- CSS -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <!-- Conteudo -->   
        <div class="conteiner-fluid"> 
            <div class="row">
                <!-- Header -->
                <header class="col-md-12 well">
                    <h1 class="text-center">Clientes A.R.M. Projects</h1>
                </header>              
            </div>
            <div class="row">
                <!-- Main -->
                <main class="col-xs-offset-1 col-md-9">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        <a href="?ordem=<?= $ordem ?>">Id</a>
                                        <span class="<?=$class?>"></span>
                                    </th>
                                    <th>Nome</th>
                                    <th>Sobrenome</th>
                                    <th>Idade</th>
                                    <th>CPF</th>
                                    <th>Cidade</th>                             
                                    <th>Email</th>                                 
                                    <th>Fone</th>                                 
                                </tr>
                            </thead>
                            <?php foreach($lista as $cliente):?>
                            <tbody>
                                <tr>
                                    <td><?=$cliente->getId();?></td>
                                    <td><?=$cliente->getNome();?></td>
                                    <td><?=$cliente->getSobrenome();?></td>
                                    <td><?=$cliente->getIdade();?></td>
                                    <td><?=$cliente->getCpf();?></td>
                                    <td><?=$cliente->getCidade();?></td>
                                    <td><?=$cliente->getEmail();?></td>
                                    <td><?=$cliente->getFone();?></td>
                                </tr>
                            </tbody>
                            <?php endforeach; ?>
                            <tfoot class="text-center">
                                <tr>
                                    <td colspan="7">Temos registrados <?=TOTALCLIENTES?> Clientes</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>                  
                </main>
            </div>
            <div class="row">
                <!-- Footer -->
                <footer class="col-md-12"></footer>
            </div>
        </div>
        <!-- JS --> 
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>

<?php

?>