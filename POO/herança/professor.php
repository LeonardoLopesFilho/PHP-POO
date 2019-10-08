<?php

require_once 'pessoaHerança.php';

class Professor extends pessoa
{
	private $especialidade;
	private $salario;


	public function ReceberAum($aum)
	{
		$this->setsalario($this->getsalario()+$aum);
		echo "<p><h1> salario aumentado </h1></p>";
		echo "Senhor ".$this->getnome();
		echo " o seu salario é ".$this->getsalario();

	}

	public function getespecialidade()
	{
		Return $this->especialidade;
	}

	public function getsalario()
	{
		Return $this->salario;
	}

	public function setespecialidade($es)
	{
		$this->especialidade = $es;
	}

	public function setsalario($salario)
	{
		$this->salario = $salario;
	} 
}