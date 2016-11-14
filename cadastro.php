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
<li><a href="cadastrar_funcionario.html">Cadastar Funcionarios</a></li>
<li><a href="consultar_funcionario.html">Consultar Funcionarios</a></li>
<li><a href="aluno.html">Alunos</a></li>
<li>Informações</li>


</ul>
<form action="consulta.php" method="post">
 <input class="campo" type="text" name="nome" size="35" placeholder="pesquisa alunos na base de dados"/> <button class="pesquisa"  type="submit">Pesquisar Aluno</button>
 
 </form>
</nav>
<br>
<br>
<hr>



<form enctype="multipart/form-data"   action="inserir.php" method="post">
<ul class="xc">
<li>
<fieldset>
<legend>Dados Pessoais</legend>
Nome do Aluno: 
<p><input type="text" name="nome" size="24" placeholder="Nome do Aluno"/><p>

Idade do Aluno: 
<p><input type="text" name="idade" size="24" placeholder="idade" /></p>

Sexo: 
<p><input type="text" name="sexo" size="24" maxlength="30" placeholder="sexo" /></p>

Naturalidade:
<p><input type="text" name="naturalidade" size="24" maxlength="30" placeholder="naturalidade" /></p>

Residencia Actual: 
<p><input type="text" name="residencia" size="24" placeholder="residencia"/></p>
</fieldset>
</li>
<li>
<fieldset>
<legend>Documentos</legend>
Fotografias (tipo pass):
<p><input type="file" name="fotografia" size="30" placeholder="importar e anexar ficheiros"/></p>

Declaração da escola/trabalho
<p>ou certificado de habilitações literarias:</p>
<p><input type="file" name="declaracao" size="30" placeholder="importar e anexar ficheiros"/></p>

Recenseamento militar(opcional para masculinos):
<p><input type="file" name="recenseamento" size="30" placeholder="importar e anexar ficheiros"/></p>
</fieldset>
</li>
<li>
<fieldset >
<legend>Pagamentos</legend>
<p>Pagamento (documento comprovativo do deposito):</p>
<p><input type="file" name="pagamento" size="24" placeholder="importar e anexar ficheiros"/></p>
<br>
Tipo de carta:
<p><input type="text" name="carta" size="24" placeholder="Tipo de carta"/><p>

</fieldset>
</li>
<br>
<button  type="submit"> Codastrar dados </button>
</form>
</center>
</div>


</body>
</html>	
