<?php

// A sess�o precisa ser iniciada em cada p�gina diferente
if (!isset($_SESSION)) session_start();

$nivel_necessario = 2;

// Verificar se n�o h� a vari�vel da sess�o que identifica o usu�rio
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {

	// Redireciona o visitante para pagina de usuario
	header("Location: escola.html");
}
else {
         header("Location: mundo.html");
		 }

?>
