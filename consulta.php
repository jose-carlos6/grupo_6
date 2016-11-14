<html>
<head>
          <title>Escola de condução AJR</title>
          <meta charset="UTF-8"/>
		  <link rel="stylesheet" type="text/css" href="estilocadastro.css"/>
		  <script src="script.js"></script>
												 
												 <script>
												 var slider = document.querySelector('.slider');
												 var container = slider.querySelector('.slider-container');
												 var total = 0;
												 var origem = 0;
												 slider.ontouchstart = function(e){
												            origem = e.changedTouches[0].clientX;
															console.log('origem ' + origem)
															e.preventDefault();
															};
															
												slider.ontouchmove = function(e){
															console.log('move ' + e.changedTouches[0].clientX)
															var delta = e.changedTouches[0].clientX - origem;
															console.log('delta ' + delta)
															container.style['-webkit-transform'] = 'translateX(' + (total + delta) + 'px)';
															e.preventDefault();
															};
															
															slider.ontouchend = function(e) {
															total += e.changedTouches[0].clientX - origem;
															console.log('end total ' + total)
															e.preventDefault();
															};
													</script>
	
</head>
<body>
<center>
<div class="cabecalho">
<img src="log.png"/>

<nav class="menu">

<ul>
<li><a href="escola.html">Página Inicial</a></li>
<li><a href="cadastro.php">Realizar Matricula</a></li>
<li>Funcionarios</li>
<li>Alunos</li>
<li>Informações</li>
<li>Ajuda</li>
<li>Contacto</li>

</ul>
<form action="consulta.php" method="post">
 <input class="campo" type="text" name="nome" size="35" placeholder="pesquisa alunos na base de dados"/> <button class="pesquisa"  type="submit">Pesquisar Aluno</button>
 
 </form>
</nav>
<br>
<br>
<hr>
<?php

include "conecta_banco_conducao.php";

$nome = $_POST['nome'];

$result = mysql_query("SELECT nome,idade,sexo,naturalidade,residencia,carta,fotografia FROM `matricula` WHERE nome='$nome' ");
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

<br>
<hr>
</div>

</center>
</body>
</html>	
