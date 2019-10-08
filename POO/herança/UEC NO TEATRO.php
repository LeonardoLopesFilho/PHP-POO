<?php

class lutador {

	//atributos 
	private $Nome;
	private $Nacionalidade, $Idade;
	private $Altura, $Peso, $Categoria;
	private $Vitorias, $Derrotas, $Empates;

	//metodos
	function apresentar(){
		echo "<p>--------------------------------</p>";
		echo "<p>CHEGOU A HORA! O lutador" . $this->GetNome();
		echo "Veio diretamente de " . $this->GetNacionalidade();
		echo " tem " . $this->GetIdade() . " anos e pesa " . $this->GetPeso() . " kilos ";
		echo " <br>Ele tem " . $this->GetVitorias() . " vitorias ";
		echo $this->GetDerrotas() . " derrotas e " . $this->GetEmpates()  . " Empates ";

	}
	function status(){
		echo "<p>--------------------------------</p>";
		echo "<P>" . $this->GetNome() . " é peso " . $this->GetCategoria();
		echo " e ja ganhou " . $this->GetVitorias() . " Vezes ";
		echo " perdeu " . $this->GetDerrotas() . " vezes ";
		echo " empatou " . $this->GetEmpates() . " vez ";
	}
	function ganharluta(){
		$this->SetVitorias($this->SetVitorias() + 1);
	}
	function perderluta(){
		$this->SetDerrotas($this->SetDerrotas() + 1);
	}
	function empatarluta(){
		$this->SetEmpates($this->SetEmpates() + 1);
	}
	//metodos especiais
	function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
		$this->Nome = $no;
		$this->Nacionalidade = $na;
		$this->Idade = $id;
		$this->Altura = $al;
		$this->SetPeso($pe);
		$this->Vitorias = $vi;
		$this->Derrotas = $de;
		$this->Empates = $em;
	}
	//Getters
	function GetNome(){
		return $this->Nome;
	}
	function GetNacionalidade(){
		return $this->Nacionalidade;
	}
	function GetIdade(){
		return $this->Idade;		
	}
	function GetAltura(){
		return $this->Altura;
	}
	function GetPeso(){
		return $this->Peso;
	}
	function GetCategoria(){
		return $this->Categoria;
	}
	function GetVitorias(){
		return $this->Vitorias;
	}
	function GetDerrotas(){
		return $this->Derrotas;
	}
	function GetEmpates(){
		return $this->Empates;
	}
	//setters
	function SetNome($no){
		$this->Nome = $no;
	}
	function SetNacionalidade($na){
		$this->Nacionalidade = $na;
	}
	function SetIdade($id){
		$this->Idade = $id;		
	}
	function SetAltura($al){
		$this->Altura = $al;
	}
	function SetPeso($pe){
		$this->Peso = $pe;
		$this->SetCategoria();
	}
	function SetCategoria(){
		if ($this->Peso < 52.2) {
			$this->Categotia ="INVALIDO!!!";
		}elseif ($this->Peso <= 70.3) {
			$this->Categoria = "leve!";
		}elseif ($this->Peso <= 83.9) {
			$this->Categoria = "Médio!";
		}elseif ($this->Peso <= 120.2) {
			$this->Categoria = "pesado!";
		}else{
			$this->Categoria ="Invalido pesado d++";
		}
	}
	function SetVitorias($vi){
		$this->Vitorias = $vi;
	}
	function SetDerrotas($de){
		$this->Derrotas = $de;
	}
	function SetEmpates($em){
		$this->Empates = $em;
	}





















}
?>	