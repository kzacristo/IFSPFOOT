<?php
	require_once('../conexao.php');
?>
<!DOCTYPE html>
<html>
  <head>
	  <title>Cadastrar Jogador</title>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1" />
	  <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
	<div id="content">	
	<fieldset>
		<form action="../_model/modelCrudCadastrarJogador.php" method="post">
		<center>
		<a href="../indexCrud.php">IFSPFOOT</a>		
		<p/>
		<h4>CADASTRAR JOGADOR</h4>
			Nome <input type="text" name="nome" />			
			Sobrenome <input type="text" name="sobrenome" />			
			Posicao <input type="text" name="posicao" />			
			Nacionalidade <input type="text" name="nacionalidade" />				
			Habilidade <input type="text" name="habilidade" />				
			Idade <input type="number" name="idade" />			
			Forca <input type="number" name="forca" />			
			ID Time 
			<select name="idTime">
				<?php
					foreach($dbh->query('SELECT * FROM Time') as $linha){
						echo "<option>{$linha['id']}</option>";
					}
				?>
			</select>			
			Estamina <input type="number" name="estamina" />			
			Nivel <input type="text" name="nivel" />			
			Gol <input type="number" name="gol" />
		<p/>				
		<input type="submit" value="Cadastrar" />
		</center>
		</form>
		<p/>
	</fieldset>
	</div>
  </body>
</html>