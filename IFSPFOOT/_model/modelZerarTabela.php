<?php
	
	//Inclusão do arquivo para conexão com o banco de dados PDO
	include_once '../_model/_bancodedados/modelBancodeDados.php';
	
	//Usado delete porque o truncate não permite quando existe chave estrangeira
	try{

		//Instrução sql para deletar todos dados da tabela
		$zerarTabelaJogador = "DELETE FROM Jogador;";
		$zerarTabelaJogo = "DELETE FROM Jogo ;";
		$zerarTabelaTime = "DELETE FROM Time ;";
		
		//Desabilitar verificação de chave estrangeiras
		$desabilitar="SET FOREIGN_KEY_CHECKS=0;";
		
		//Deletar todos dados da tabela
		$conn->exec($desabilitar);
		$conn->exec($zerarTabelaJogo);
		$conn->exec($zerarTabelaTime);
		$conn->exec($zerarTabelaJogador);
	
	}catch(PDOException $e){

		echo $sql . "<br>" . $e->getMessage();
	}
?>