<?php
include "conecta_banco_conducao.php";

$fotografia = $_FILES['fotografia']['type'];
$declaracao = $_FILES['declaracao']['type'];
$recenseamento = $_FILES['resenceamento']['type'];



mysql_query("INSERT INTO funcionarios(nome,data_nascimento,sexo,bi,endereco,contacto,cargo,fotografia,declaracao,recenseamento) VALUES('$_POST[nome]','$_POST[data_nascimento]','$_POST[sexo]','$_POST[bi]','$_POST[endereco]','$_POST[contacto]','$_POST[cargo]','$fotografia','$declaracao','$recenseamento')") or die ("Nao inseriu");
   echo "Dados inseridos no banco com sucesso! ";
?>