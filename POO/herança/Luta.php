<?php
require_once 'UEC NO TEATRO.php';

class luta {
	//atributos 
	private $desafiado;
	private $desafiante;
	private $rounds;
	private $aprovada;

	//Metodos Publicos

	public function marcarluta($l1,$l2){
		if ($l1->GetCategoria() == $l2->GetCategoria() && ($l1 != $l2)) {
			$this->aprovada = true;
			$this->desafiado = $l1;
			$this->desafiante = $l2;
		}else{
			$this->aprovada = false;
			$this->desafiado = snull;
			$this->desafiante = null;
		}
	}

	public function lutar(){
		if ($this->getAprovada() == true) {
			$this->getDesafiado()->apresentar();
			$this->getDesafiante()->apresentar();
			$vencedor = rand(0,2);
			switch ($vencedor) {
				case 0://empate
					echo "<p>Empatou!!!!!!</p>";
					$this->desafiado->empatarluta();
					$this->desafiante->empatarluta();
					break;
				case 1://Vitoria desafiado
					echo "<p>" . $this->getDesafiado()->getnome(). "Venceu</p>" ;
					$this->desafiado->ganharluta();
					$this->desafiante->perderluta();
					break;
				case 2://Vitoria desafiante
					echo "<p>" . $this->getDesafiante()->getnome(). "Venceu</p>" ;
					$this->desafiado->perderluta();
					$this->desafiante->ganharluta();
					break;		
			}
		}else{
			echo "<p>Luta não pode acontecer</p>";
		}

	}

	function getDesafiado(){
		return $this->desafiado;
	}

	function getDesafiante(){
		return $this->desafiante;
	}

	function getRounds(){
		return $this->rounds;
	}

	function getAprovada(){
		return $this->aprovada;
	}

	function setDesafiado($desafiado){
		$this->desafiado = $desafia;
	}

	function setDesafiante($desafian){
		$this->desafiante = $desafian;
	}

	function setRounds($r){
		$this->rounds = $r;
	}

	function setAprovada($a){
		$this->aprovada = $a;
	}
}

?>