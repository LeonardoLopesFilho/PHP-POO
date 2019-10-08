<?php

require_once 'pessoaHerança.php';

class funcionario extends pessoa
{
	private $setor;
	private $trabalhando;


	public function mudartrabalho()
	{
		$this->trabalhando = ! $this->trabalhando;

	}

	public function getsetor()
	{
		Return $this->setor;
	}

	public function gettrabalhando()
	{
		Return $this->trabalhando;
	}

	public function setsetor($set)
	{
		$this->setor = $set;
	}

	public function settrabalhando($trabs)
	{
		$this->trabalhando = $trabs;
	} 
}