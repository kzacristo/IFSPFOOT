<?php
 
	//Inclusão do arquivo para conexão com o banco de dados PDO
	include_once '../_model/_bancodedados/modelBancodeDados1.php';
	
	class modelClassJogo{

		private $id;
		private $timeCasa;
		private $timeVisitante;
		private $golCasa;
		private $golVisitante;
		private $rodada;
		private $data;
		private $hora;
		private $clima;
        
		//Getter e setters
		
		public function __destruct(){
			
		}
		
		public function getId(){
			return $this->id;
		}
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getTimeCasa(){
			return $this->timeCasa;
		}
		
		public function setTimeCasa($timeCasa){
			$this->timeCasa = $timeCasa;	
		}
		
		public function getTimeVisitante(){
			return $this->timeVisitante;
		}
		
		public function setTimeVisitante($timeVisitante){
			$this->timeVisitante = $timeVisitante;
		}
		
		public function getGolCasa(){
			return $this->golCasa;
		}
		
		public function setGolCasa($golCasa){
			$this->golCasa = $golCasa;
		}
		
		public function getGolVisitante(){
			return $this->golVisitante;
		}
		
		public function setGolVisitante($golVisitante){
			$this->golVisitante = $golVisitante;
		}
		
		public function getRodada(){
			return $this->rodada;
		}
		
		public function setRodada($rodada){
			$this->rodada = $rodada;
		}
		
		public function getData(){
			return $this->data;
		}
		
		public function setData($data){
			$this->data = $data;
		}
		
		public function getHora(){
			return $this->hora;
		}
		
		public function setHora($hora){
			$this->hora = $hora;
		}
		
		public function getClima(){
			return $this->clima;
		}
		
		public function setClima($clima){
			$this->clima = $clima;
		}
		
		public function insirirJogo(){
			
			$conn = Database::conexao();
			$atualizaPlacarJogo = 'UPDATE Jogo SET golCasa = ?, golVisitante = ? WHERE timeCasa = ? and timeVisitante= ? ';
			
		}
		
		public function atualizaPlacar($jogo){
			
			$conn = Database::conexao();
			
			$atualizaPlacarJogo = 'UPDATE Jogo SET golCasa = ?, golVisitante = ? WHERE timeCasa = ? and timeVisitante= ? ';
			$preparaAtualizaPlacarJogo = $conn->prepare($atualizaPlacarJogo);
			$preparaAtualizaPlacarJogo->bindValue(1,$jogo->getGolCasa());
			$preparaAtualizaPlacarJogo->bindValue(2,$jogo->getGolVisitante());
			$preparaAtualizaPlacarJogo->bindValue(3,$jogo->getTimeCasa());
			$preparaAtualizaPlacarJogo->bindValue(4,$jogo->getTimeVisitante());
			$preparaAtualizaPlacarJogo->execute();
			
	   }

	   public function mostraPlacar(){
	   	
		   echo $this->getGolCasa();
		   echo $this->getGolVisitante();
		   echo $this->getTimeCasa();
		   echo $this->getTimeVisitante();
	   		
	   }
	   
	   public function cadastrarJogo($jogo){
	   	
	   		$conn = Database::conexao();
	   		
	   		echo $id = $this->getId();
	   		echo $timeCasa = $this->getTimeCasa();
	   		echo $timeVisitante = $this->getTimeVisitante();
	   		echo $rodada = $this->getRodada();
	   		
	   		//Cadastro do campeonato inicial
	   		$insercaoNovoCampeonato = "INSERT INTO Jogo VALUES ('$id','$timeCasa',NULL,NULL,'$timeVisitante',
	   	   '$rodada','01/01/01','18:00','nublado')";
	   		$conn->exec($insercaoNovoCampeonato);
	   	
	   }
	   
	   public function consultaJogoRodada($rodadaAtual){

	   		$conn = Database::conexao();
	   			
	   		$times = array();
	   	
		   	$consultaRodada = 'SELECT timeCasa, timeVisitante FROM Jogo WHERE rodada = ?';
		   	$preparaConsultaRodada = $conn->prepare($consultaRodada);
		   	$preparaConsultaRodada->bindValue(1,$rodadaAtual);
		   	$preparaConsultaRodada->execute();
		   	
		   	$result = $preparaConsultaRodada->setFetchMode(PDO::FETCH_NUM);
		   	while ($row = $preparaConsultaRodada->fetch()) {
		   	
		   		$times[]= $row[0];
		   		$times[]= $row[1];
		   	
		   	}
		   	return $times;
	   }
	   
	   public function verificaPlacar($golCasa,$golVisitante){
	   		
		   	if($golCasa > $golVisitante){
		   	
		   		return 1;  
		   				   	
		   	}
		   	
		   	elseif ($golVisitante > $golCasa){
		   			
		   		return 2;
		   			
		   	}
		   	
		   	else{
		   		
		   		return 3;
		   	}
	   }
 
	   public function consultaJogos(){

	   		$conn = Database::conexao();
	   		
	   		$jogos = array();
	   		
	   		$consultaJogo = 'SELECT timeCasa, golCasa, golVisitante, timeVisitante,
								 data, hora, clima FROM Jogo';
			$preparaConsultaJogo = $conn->query($consultaJogo);
			$preparaConsultaJogo->execute();
			
			$result = $preparaConsultaJogo->setFetchMode(PDO::FETCH_NUM);
			while ($row = $preparaConsultaJogo->fetch()) {
		
				$jogos[] = $row[0];	
				$jogos[] = $row[1];
				$jogos[] = $row[2];
				$jogos[] = $row[3];
				$jogos[] = $row[4];
				$jogos[] = $row[5];
				$jogos[] = $row[6];

			}
	   	
			return $jogos;
	   }
	   
	   public function visualizaJogos($jogos){
	   	
	   		$colunas = 7;
	   		for($i=0; $i < count($jogos); $i++) {
	   			
	   		echo "<td>".$jogos[$i]."</td>";
	   		if((($i+1) % $colunas) == 0 )
	   			echo "</tr><tr>";
	   		}
	   }
	   
	}
?>