<?php

class pessoa
{

	private $nome;
	private $sexo;
	private $idade;

    //Metodos especiais
    public function __construct($n,$s,$i)
    {
        $this->nome = $n;
        $this->sexo = $s;
        $this->idade= $i;
    }
    public function Getnome()
    {
    	Return $this->nome;
    }
    public function Getsexo()
    {
    	Return $this->sexo;
    }
    public function Getidade()
    {
    	Return $this->idade;
    }
    public function Setnome($n)
    {
    	$this->nome = $n; 
    }
    public function Setsexo($s)
    {
    	$this->sexo = $s;
    }
    public function Setidade($i)
    {
    	$this->idade = $i;
    }
    public function fazerAniver()
    {
    	$this->idade = $this->idade + 1;
    }
}