<?php

require_once 'Pessoa.php';
require_once 'Publicaçao.php';

class Livro implements publicaçao 
{

	//atributos 
	private $titulo;
	private $autor;
	private $totPaginas;
	private $pagAtual;
	private $aberto;
	private $leitor;

	//metodos especiais

	public function __contruct($titulo,$autor,$totPaginas,$leitor)
	{
		$this->titulo = $titulo;
		$this->autor  = $autor;
		$this->totPaginas = $totPaginas;
		$this->leitor = $leitor;
	}
	public function Gettitulo()
	{
		return $this->titulo;
	}
	public function Getautor()
	{
		return $this->autor;
	}
	public function GettotPaginas()
	{
		return $this->totPaginas;
	}
	public function GetpagAtual()
	{
		return $this->pagAtual;
	}
	public function Getaberto()
	{
		return $this->aberto;
	}
	public function Getleitor()
	{
		return $this->leitor;
	}
	public function Settitulo($t)
	{
		$this->titulo = $t;
	}
	public function Setautor($a)
	{
		$this->autor = $a;
	}
	public function SettotPaginas($tot)
	{
		$this->totPaginas = $tot;
	}
	public function SetpagAtual($atual)
	{
		$this->pagAtual = $atual;
	}
	public function Setaberto($aber)
	{
		$this->aberto = $aber;
	}
	public function Setleitor($lei)
	{
		$this->leitor= $lei;
	}
	public function detalhes()
	{

	}
	public function abrir()
	{
		$this->Setaberto = true;
	}
	public function fechar()
	{ 
		$this->Setaberto = false;
	}
	public function folhear($p)
	{	
		if ($p>$this->GettotPaginas) 
		{
			$this->SetpagAtual = 0;
		}else
		{
			$this->SetpagAtual = $p;
		}
	}
	public function avançarPag()
	{
		$this->pagAtual ++;
	}
	public function voltarPag()
	{
		$this->pagAtual --;
	}

}
