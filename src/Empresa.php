<?php

require('Banco.php');

class Empresa
{
	private $banco;

	public function __construct()
	{
		$this->banco = new Banco;	
	}

	public function all()
	{
		$conexao = $this->banco->conexao();
		$query = $conexao->prepare("SELECT * FROM empresas");
		$query->execute();

		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function buscar($id)
	{
		$conexao = $this->banco->conexao();
		$query = $conexao->prepare("SELECT * FROM empresas WHERE id = ?");
		$query->bindParam(1, $id);
		$query->execute();

		return $query->fetch(PDO::FETCH_ASSOC);
	}

	public function inserir($dados)
	{
		$campos = implode(', ', array_keys($dados));
		$incognitas = implode(', ', array_fill(0, count($dados), '?'));

		$conexao = $this->banco->conexao();
		$query = $conexao->prepare("INSERT  INTO empresas(" . $campos . ") VALUES (" . $incognitas .  ")");

		foreach (array_values($dados) as $key => $dado) {
			$indice = ++$key;
			$query->bindParam($indice, $dado);
		}		

		$query->execute();
	}
}