<?php 
	require_once "Class/ClienteFactory.php";
	$clientes = new ClienteFactory();

    (!isset($_GET['cliente']) || $_GET['cliente'] < 0)? $includePg = "lista.php" : $includePg = "descricao.php";

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
