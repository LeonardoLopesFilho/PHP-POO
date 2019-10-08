<?php

require_once 'pessoaHerança.php';

class Aluno extends pessoa
{
	private $matr;
	private $curso;


	public function cancelarMatr()
	{
		echo "<p>Matricula cancelada</p>";
		$this->setcurso("nenhum curso Matricula cancelada");

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