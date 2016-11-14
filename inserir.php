<?php
include "conecta_banco_conducao.php";

$fotografia = $_FILES['fotografia']['type'];
$declaracao = $_FILES['declaracao']['type'];
$recenseamento = $_FILES['recenseamento']['type'];
$pagamento = $_FILES['pagamento']['type'];
$carta = $_POST['carta'];

mysql_query("INSERT INTO matricula(nome,idade,sexo,naturalidade,residencia,fotografia,declaracao,recenseamento,carta,pagamento) VALUES('$_POST[nome]','$_POST[idade]','$_POST[sexo]','$_POST[naturalidade]','$_POST[residencia]','$fotografia','$declaracao','$recenseamento','$carta','$pagamento')") or die ("Nao inseriu");
   echo "Dados inseridos no banco com sucesso! ";
?> 