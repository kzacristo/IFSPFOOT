<?php
	
	//Inclusão do arquivo para conexão com o banco de dados PDO
	include_once '../_model/_bancodedados/modelBancodeDados.php';
	
	//Zerar tabelas novo jogo
	include_once '../_model/modelZerarTabela.php';
	
	//Variaveis da viewNovoJogo.php
	$nomeTime    = $_GET['textNomeTime'];
	$mascote  = $_GET['textNomeMascote'];
	$cor = $_GET['selectCor'];
	$nomeEstadio = $_GET['textNomeEstadio'];
	
	//Inicio de Sessão para pegar usuario logado, usuário é único
	session_start();
	//$usuario = $_SESSION['usuario'];

	$dono = $_SESSION['idDono'];
		
    //Regra do Jogo
    $dinheiroInicial = "10,00";
    $torcidaInicial = "10";
    $capacidade = "10";
	
?>

<!DOCTYPE html>

<html>
  
  <head>

  	  <title>Cadastrar</title>
	  <meta charset="utf-8">
  
  </head>
  
  <body>
  
  	<?php

  		//Inserção do um novo time
  		$insercaoNovoTime = "INSERT INTO Time VALUES (1,'$nomeTime','$mascote','$cor','$dono','$dinheiroInicial','$torcidaInicial','$nomeEstadio','$capacidade')";
  		$conn->exec($insercaoNovoTime);
  		
		header("LOCATION: ../_controller/controllerGerenciaInicio.php");
	
  	?>
  
  </body>
  
</html>