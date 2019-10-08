<?php

abstract class pessoa
{

	protected $nome;
	protected $sexo;
	protected $idade;

    //Metodos especiais
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
    public final function fazerAniver()
    {
    	$this->idade = $this->idade + 1;
    }
}