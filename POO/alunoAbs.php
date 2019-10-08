<?php

require_once 'pessoaABSTRATA.php';

class Aluno extends pessoa
{
	private $matr;
	private $curso;


	public function PagarMensalidade($Mensalidade)
	{
		echo "<p>Mensalidade Paga Com sucesso!</p>";

	}

	public function getmatr()
	{
		Return $this->matr;
	}

	public function getcurso()
	{
		Return $this->curso;
	}

	public function setmatr($m)
	{
		$this->matr = $m;
	}

	public function setcurso($c)
	{
		$this->curso = $c;
	} 
}