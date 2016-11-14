<?php

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)) session_start();

$nivel_necessario = 2;

// Verificar se não há a variável da sessão que identifica o usuário
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {

	// Redireciona o visitante para pagina de usuario
	header("Location: escola.html");
}
else {
         header("Location: mundo.html");
		 }

?>
