<?php
	require_once "Class/ClienteFactory.php";
	$clientes = new ClienteFactory();

    (!isset($_GET['cliente']) || $_GET['cliente'] <= 0)? $includePg = "lista.php" : $includePg = "descricao.php";

		if (!isset($_GET['ordem']) || $_GET['ordem'] == 1) {
			$_GET['ordem'] = $ordem = 0;
			$class = "glyphicon glyphicon-sort-by-order";
			$clientes->ordemCrescente();
		} elseif ($_GET['ordem'] == 0) {
			$_GET['ordem'] = $ordem = 1;
			$class = "glyphicon glyphicon-sort-by-order-alt";
			$clientes->ordemDecrescente();
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
				<main class="col-md-offset-1 col-md-9">
					<?= include $includePg; ?>
				</main>
			</div>
			<div class="row">
				<!-- Footer -->
				<footer class="col-md-12">

				</footer>
			</div>
		</div>
		<!-- JS -->
		<script src="bower_components/jquery/dist/jquery.js"></script>
		<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
		<script src="js/main.js"></script>
		</body>
		</html>