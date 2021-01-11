<?php
include_once'config.php';
	class Conexao{
		private $db;

		private function Conecta(){
			try{
				$this->db = new PDO("mysql:host=".HOST.";dbname=".BANCO.";",USUARIO, PASSWORD);
				$this->db->exec("SET CHARACTER SET utf8");
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $erros){
				die("Código do erro: # {$erros->getCode()}<br>Mensagem: # {$erros->getMessage()}<br>Arquivo: # {$erros->getFile()}<br>Erro na linha: # {$erros->getLine()}<br>");
			}
			return $this->db;
		}

		public function getConecta(){
			return $this->Conecta();
		}
	}
?>