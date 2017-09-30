<?php

class Banco
{
	private $host = '';

	private $database = '';

	private $user = '';

	private $password = '';

	public function conexao()
	{
		$conexao = "mysql:host=" . $this->host . ";dbname=" . $this->database;
		return new PDO($conexao, $this->user, $this->password);
	}
}
