<?php

class ContaBanco {
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;
	
	public function __construct(){
		$this->setSaldo(0);
		$this->setStatus(false);
		echo "<p>conta criada com sucesso</p>";		
	}

	public function setNumConta($n){
		$this->numConta = $n;
	}

	public function getNumConta(){
		return $this->numConta;
	}

	public function setTipo($t){
		$this->tipo = $t;
	}

	public function getTipo(){
		return $this->tipo;
	}

	public function setDono($d){
		$this->dono = $d;
	}

	public function getDono(){
		return $this->dono;
	}

	public function setSaldo($s){
		$this->saldo = $s;
	}

	public function getSaldo(){
		return $this->saldo;
	}

	public function setStatus($t){
		$this->status = $t;
	}

	public function getStatus(){
		return $this->status;
	}

	public function abrirConta($t){
		$this->setTipo($t);
		$this->setStatus(true);
		if ($t=="CC") {
		 	$this->setSaldo =50;
		 }elseif ($t=="CP") {
		 	$this->setSaldo =120;
		 }
	}
	public function fecharConta(){
		if ($this->getSaldo > 0) {
			echo "<p>Conta tem dinheiro</p>";
		}elseif ($this->getsaldo()) {
			echo "<p>Conta em debito</p>";
		}else{
			$this->setStatus(false);
		}
	}
	public function depositar($v){
		if ($this->getStatus()) {
			$this->setSaldo($this->getSaldo() + $v);
		}else{
			echo "<p>impossivel depositar conta fechada</p>";
		}
	}
	public function sacar($v){
		if ($this->getStatus(true)) {
			if ($this->getSaldo > $v) {
				$this->setSaldo($this->getSaldo() - $v);
			}else{
				echo "<p>saldo insuficiente</p>";
			}
		}else{
			echo "<p>impossivel sacar nao posso sacar de uma conta fechada</p>";
		}
	}
	public function pagarMensal($v){
		if ($this->getTipo == "CC") {
			$v = 12;
		}elseif ($this->getTipo =="CP") {
			$v = 20;
		}
		if ($this->getStatus()) {
			$this->setSaldo($this->getSaldo() -$v);
		}else{
			echo "saldo insufisiente";
		}
	}	

}






?>