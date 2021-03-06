<?php

	/* Este arquivo receberá os dados encaminhados pelo index, e consultará o banco 
	 caso o usuário esteja cadastrado e com a senha correta será encaminhado ao menu inicial,
	 se não, será informado no index "Usuário ou senha inexistentes no banco
	 */

	//Iniciando sessão
	session_start();

	//Inclusão do arquivo para model Classe do usuario
	include_once '../_model/modelClassUsuario.php';
	
	class controllerAutenticaLogin {
		
		private $login;
		private $senha;
		
		function __construct(){
			$this->consultaAcesso();
		}
		
		function __destruct(){
			
		}

		function consultaAcesso(){
			
			//Variaveis do index.php
			$usuario = new modelClassUsuario();
			
			$usuario->setLogin($_POST['form-username']);
			$usuario->setSenha($_POST['form-password']);
			
			$dados = $usuario->consultaUsuario($usuario);
			
		 	//Se o resultado da consulta for diferente de vazio, então registra sessão e chama a view Inicial
			if(!empty($dados)){
				
				$_SESSION['usuario']= $usuario;
				$_SESSION['logado']= true;
				$_SESSION['idDono']= $dados;
				
				header("Location: ../_view/viewInicial.php");
			 
			}
			
			else {
				
				$_SESSION['logado']= false;
				header("Location: ../index.php");
		
			}
		}

	}
	
	$autenticaLogin = new controllerAutenticaLogin();
	
?>