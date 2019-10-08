<?php

require_once 'Controlador.php';

class ControleRemoto implements Controlador {

	//atributos 
	private $Volume;
	private $ligado;
	private $tocando;

	//metodos especiais

	public function __contruct(){
		$this->Volume = 50;
		$this->ligado = false;
		$this->tocando = false;
	}

	private function setVolume($v){
		$this->Volume = $v;
	}

	private function getVolume(){
		return $this->Volume;
	}

	private function setLigado($l){
		$this->Ligado = $l;
	}

	private function getLigado(){
		return $this->ligado;
	}

	private function setTocando($t){
		$this->tocando = $t;
	}

	private function getTocando(){
		return $this->tocando;
	}

	public function ligar(){
		$this->setLigado(true);
	}
	public function desligar(){
		$this->setLigado(false);
	}
	public function abrirmenu(){
		echo "<br>Está Ligado?:" . ($this->getLigado()?"SIM":"NÃO");
		echo "<br>Está Tocando>:". ($this->getTocando()?"SIM":"NÃO");
		echo "<br>Volume:" . $this->getVolume();
		for ($i=0; $i<=$this->getVolume() ; $i+=10) { 
			echo "|";
		}
		echo "<br>";
	}
	public function fecharmenu(){
		echo "<br>Fechando Menu";
	}
	public function maisVolume(){
		if ($this->getLigado()) {
			$this->setVolume($this->getVolume + 5);
		}
	}
	public function menosVolume(){
		if ($this->getLigado()) {
			$this->setVolume($this->getVolume - 5);
		}
	}
	public function ligarMudo(){
		if ($this->getLigado() && $this->getVolume()>0) {
			$this->setVolume(0);
		}
	}
	public function desligarMudo(){
		if ($this->getLigado() && $this->getVolume()==0) {
			$this->setVolume(50);
		}
	}
	public function play(){
		if ($this->getLigado() && !($this->getTocando())) {
			$this->setTocando(true);
		}
	}
	public function pause(){
		if ($this->getLigado() && $this->getTocando()) {
			$this->setTocando(false);
		}
	}
}
?>