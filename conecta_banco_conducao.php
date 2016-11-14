<?php 
$servidor = 'localhost';
$banco = 'escola_conducao';
$usuario = 'root';
$senha = '';

$conexao = mysql_connect($servidor,$usuario,$senha);
   if(!($conexao)) {
         echo "Nao foi possivel establecer a conexao com MSQL";
		    exit;
			}
			
$selecao = mysql_select_db($banco,$conexao);
    if(!($selecao)) {
	    echo "Nao foi possivel selecionar o gerenciador MYSQL.";
		  exit;
		  }
		  
?>