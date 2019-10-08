<?php

abstract class Animal
{

	protected $peso;
	protected $membros;
	protected $idade;

    //Metodos especiais
    abstract function locomover();
    abstract function alimentar();
    abstract function emitirsom();

    public function Getpeso()
    {
    	Return $this->peso;
    }
    public function Getmembros()
    {
    	Return $this->membros;
    }
    public function Getidade()
    {
    	Return $this->idade;
    }
    public function Setpeso($p)
    {
    	$this->peso = $p; 
    }
    public function Setmembros($m)
    {
    	$this->membros = $m;
    }
    public function Setidade($i)
    {
    	$this->idade = $i;
    }
}