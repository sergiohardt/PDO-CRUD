<?php
include_once('Classes/Conexao.class.php');

class Select extends Conexao{
	private $pdo; //conecta com o pdo
	private $sql; //realiza o select
	private $query; // pega o select da index
	private $resultado; // exibe os dados da consulta

	//set e get
	public function setQuery($query){
		$this->query = $query;
	}

	public function getQuery(){
		return $this->query;
	}

	public function getResultado(){
		return $this->resultado;
	}

	private function MinhaConexao(){
		$this->pdo = parent::getConecta();
	}

	public function ExecutaSelect($query){
		$this->MinhaConexao();
		$this->MontaSelect($query);
	}

	private function MontaSelect($query){
		$this->sql = $this->pdo->prepare($this->getQuery());
		$this->sql->execute();
		$this->resultado = $this->sql->fetchAll(PDO::FETCH_ASSOC);
		echo '<pre>';
		var_dump($this->resultado);
		echo '</pre>';
	}
}