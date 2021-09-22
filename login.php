<?php
session_start();
include('conexao.php');
/*verifica se o usuario digitou um senha caso contrario e redirecionado para index*/ 
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

/* Validação de senha e usuario ,proteção contra SQL injection */
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

/*validação do usuario */
$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";
/* executa a query*/
$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);
 /*validação */
if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}