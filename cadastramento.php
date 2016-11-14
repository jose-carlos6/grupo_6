<html>
<head>
          <title>Cadastramento de Alunos</title>
          <meta charset="UTF-8"/>
		  <link rel="stylesheet" type="text/css" href="estilocadastro.css"/>
	
</head>
<body>
<nav class="consulta">
<form action="consultar.php" method="post">
 <input class="campo" type="text" name="nome" size="35" placeholder="pesquisa alunos na base de dados"/><button class="pesquisa"  type="submit">Pesquisar Aluno</button>
 
 </form>
 </nav>
 
<center><h1> Formulário de Matrículas, cadastro </h1>

<br>
<fieldset id="resul">
<legend>Inssira os Dados</legend>
<form enctype="multipart/form-data"   action="inserir.php" method="post">
<ul>
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
<fieldset id="resul">
<legend>Pagamentos</legend>
<p>Pagamento (documento comprovativo do deposito):</p>
<p><input type="file" name="pagamento" size="24" placeholder="importar e anexar ficheiros"/></p>
<br>
Tipo de carta:
<p><input type="text" name="carta" size="24" placeholder="Tipo de carta"/><p>

</fieldset>
</li>
</ul>
<center><button  type="submit"> Codastrar dados </button>
</form>
</fieldset>

</center>
</body>
</html>	
