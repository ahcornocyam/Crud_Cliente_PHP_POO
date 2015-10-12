<?php
	require_once "funcionalidade.php";
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
				<main class="col-md-offset-1 col-md-10 col-md-offset-1">
					<?php include $includePg?>
				</main>
			</div>
			<div class="row">
				<!-- Footer -->
				<footer class="col-md-12">
                    <h6 class="text-center"> Todos os direitos reservados a mim.</h6>
				</footer>
			</div>
		</div>
		<!-- JS -->
		<script src="bower_components/jquery/dist/jquery.js"></script>
		<script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>