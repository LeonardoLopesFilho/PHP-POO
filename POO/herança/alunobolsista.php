<?php

require_once 'alunoAbs.php';

class Bolsista extends Aluno
{
	private $bolsa;

	public function Renovarbolsa()
	{
		echo "<p>Bolsa renovada Com sucesso!</p>";

	}
	public function PagarMensalidade($Mensalidade)
	{
		echo "<p>Paga com desconto!</p>";

	}

	public function Getbolsa()
	{
		return $this->bolsa;
	}

	public function Setbolsa($bolsa)
	{
		$this->bolsa = $bolsa;
	}

}