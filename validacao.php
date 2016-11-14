<?php

// Verifica se houve POST e se o usuсrio ou a senha щ(sуo) vazio(s)
if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
	header("Location: erro_de_acesso.html"); exit;
}

// Abrir a conexao com servidor MySQL
mysql_connect('localhost', 'root', '') or trigger_error(mysql_error());
// Abrir a conexao com a base de dados MySQL
mysql_select_db('escola_conducao') or trigger_error(mysql_error());

$usuario = mysql_real_escape_string($_POST['usuario']);
$senha = mysql_real_escape_string($_POST['senha']);

// Validaчуo do usuсrio/senha digitados
$sql = ("SELECT id, nome, nivel FROM `usuarios` WHERE (usuario = '$_POST[usuario]') AND (senha = '$_POST[senha]') AND (ativo = 1 or 2) LIMIT 1");
$query = mysql_query($sql);
if (mysql_num_rows($query) != 1) {
	
	// Procedimento de erro quando os dados sуo invсlidos e/ou o usuсrio nуo foi encontrado
	header("Location: erro_de_acesso.html"); exit;
} else {
	// Salva os dados encontados na variсvel $resultado
	$resultado = mysql_fetch_assoc($query);

	// Se a sessуo nуo existir, inicia uma
	if (!isset($_SESSION)) session_start();

	// Salva os dados encontrados na sessуo
	$_SESSION['UsuarioID'] = $resultado['id'];
	$_SESSION['UsuarioNome'] = $resultado['nome'];
	$_SESSION['UsuarioNivel'] = $resultado['nivel'];

	// Redireciona o usuario
	header("Location: restrito.php"); exit;
}

?>