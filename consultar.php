<html>
<head>
          <title>Cadastramento de Alunos</title>
          <meta charset="UTF-8"/>
		  <link rel="stylesheet" type="text/css" href="estilocadastro.css"/>
	
</head>
<body>
<nav class="consulta">
<form action="consultar.php" method="post">
 <input class="campo" type="text" size="35" placeholder="pesquisa alunos na base de dados"/> <button class="pesquisa"  type="submit">Pesquisar Aluno</button>
 
 </form>
 </nav>
 
<center>

<br>
<br>
<br>
<br>
<br>
<br>
<h1> Resultado da pesquisa </h1>
<br>
<fieldset id="resul">
<legend>Aluno</legend>
<?php

include "conecta_banco_conducao.php";
$nome = $_POST['nome'];
$resultado = mysql_query("SELECT fotografia FROM `matricula` WHERE nome='$nome' ");
$imagem = mysql_fetch_object($resultado);




?>

<?php

include "conecta_banco_conducao.php";

$nome = $_POST['nome'];
$result = mysql_query("SELECT nome,idade,sexo,naturalidade,residencia,carta FROM `matricula` WHERE nome='$nome' ");
while($row = mysql_fetch_array($result))

{
	 echo"<ul class='xx'>";
	 
	
	  
      
	  echo"<li>";
	 
	  echo "<h5>Nome do Aluno:</h5>"; 
	  echo $row['nome'];
	  
	  echo"</li>";
	  
	  
	 
	  echo"<li>";
	   
	  echo "<h5>Idade:</h5>";
	  echo $row['idade'];
	  
	  echo"</li>";
	  
	  
	  echo"<li>";
	   
	  echo "<h5>Sexo:</h5>";
	  echo $row['sexo'];
	  
	  echo"</li>";
	  
	 
	 echo"<li>";
	   
	  echo "<h5>Natural de:</h5>";
	  echo $row['naturalidade'];
	  
	  echo"</li>";
      
	  echo"<li>";
	   
	  echo "<h5>Residente :</h5>";
	  echo $row['residencia'];
	  
	  echo"</li>";
	  
	  echo"<li>";
	   
	  echo "<h5>Tipo de carta  :</h5>";
	  echo $row['carta'];
	  
	  echo"</li>";
	  
	  echo"</ul>";
	
	}
	?>
</fieldset>

</center>
</body>
</html>	
