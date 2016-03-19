<?php 

	//Inclusão do arquivo para conexão com o banco de dados PDO
	include_once '../_model/_bancodedados/modelBancodeDados.php';

?>
<!DOCTYPE html>

<html>

<head>

	<meta charset= "UTF-8"/>
	
	<title>Página Inicial</title>
	
	<!-- Visualização Mobile" -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Incluindo Bootstrap CSS -->
	<link href="_bootstrap-3.3.6-dist/_css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<!-- Incluindo Bootstrap JavaScript-->
	<script src="_bootstrap-3.3.6-dist/_js/bootstrap.min.js"></script>
	
	<!-- Incluindo jquery-->
	<script src="_jquery/jquery.js"></script>

</head>

<body>
	<h2 class="text-center">Projeto IFSPFOOT</h2>
	<h2 class="text-center">Equipe do Projeto</h2>
	
	<div class="table-responsive">
	<table class="table">
      <thead>
        <tr class="info">
          <th>Nome</th>
          <th>Matricula</th>
          <th>Atribuições</th>
        </tr> 
      </thead>
      <tbody>
      
      	<tr class="active">
			<td>Wesley Almeida da Silva</td>
			<td>xxxxx</td>
			<td>Gerente de Projeto, Programador Chefe, Teste</td>
			<td></td>
		</tr>
		
		<tr class="active">
			<td>Bruno Chrisostomo</td>
			<td>xxxxx</td>
			<td>Gerente de Projeto Adjunto,Programador</td>
			<td></td>
		</tr>
		
		<tr class="active">
			<td>Samuel Gomes de Lima </td>
			<td>xxxxx</td>
			<td>Programador, Teste</td>
			<td></td>
		</tr>
		
		
		<tr class="active">
			<td>Leticia Oliveira Fernanda</td>
			<td>xxxxx</td>
			<td>Documentação, Programadora</td>
			<td></td>
		</tr>

		<tr class="active">
			<td>Justh Franklin</td>
			<td>xxxxx</td>
			<td>Programador, Teste</td>
			<td></td>
		</tr>
		      </tbody>
	</table>
	</div>
		
	<h2 class="text-center">Ferramentas de Desenvolvimento</h2>
	
	<div class="table-responsive">
	<table class="table">
      <thead>
        <tr class="info">
          <th>Nome</th>
          <th>Tipo</th>
          <th>Descrição</th>
        </tr> 
      </thead>

	
      <tbody>
      
      	<tr class="active">
			<td>XAMPP 5.6.15-1</td>
			<td>Ambiente Integrado</td>
			<td>PHP 5.6.15(Linguagem Web - Servidor), Mysql 5.0.11 (SGBD),phpMyAdmin 4.5.2(SGBD Gráfico), Apache 2.4.17 (Servidor Web Local)</td>
			<td></td>
		</tr>
		
		<tr class="active">
			<td>Eclipse 3.8.1</td>
			<td>Desenvolvimento</td>
			<td>IDE de desenvolvimento, também esta instalado Plugin EGIT - Controle de Versionamento</td>
			<td></td>
		</tr>

	</tbody>
	</table>
	</div>
	
	<h2 class="text-center">Biblioteca de Desenvolvimento</h2>
	<div class="table-responsive">
	<table class="table">
      <thead>
        <tr class="info">
          <th>Nome</th>
          <th>Linguagem</th>
          <th>Versão</th>
        </tr> 
      </thead>

	
      <tbody>
      
      	<tr class="active">
			<td>Bootstrap</td>
			<td>CSS, Javascript</td>
			<td>3.3.6</td>
			
		</tr>
		
		<tr class="active">
			<td>Jquery</td>
			<td>Javascript</td>
			<td>2.2.1</td>	
		</tr>
		
		<tr class="active">
			<td>AngularJS</td>
			<td>Javascript,CSS</td>
			<td>2.2.1</td>	
		</tr>
	</tbody>
	</table>
	</div>
</body>

</html>