<?php
include "conecta_banco.php";

mysql_query("INSERT INTO usuarios(nome,usuario,senha,email,nivel,ativo,cadastro) VALUES('$_POST[nomeusuario]','$_POST[nomeconta]','$_POST[senha]','$_POST[email]','$_POST[nivel]','$_POST[activo]','$_POST[data]')") or die ("Nao inseriu");
   echo "Dados inseridos no banco com sucesso! ";
?> 