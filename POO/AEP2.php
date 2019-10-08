<?php

class pessoa
{

	private $nome;
	private $data;
    private $cpf;
    private $altura;
    private $peso;
    private $imc;
    private $idade;


    //Metodos especiais
    public function __construct($nome,$data,$cpf,$altura,$peso)
    {
        $this->nome  = $nome;
        $this->data  = $data;
        $this->cpf   = $cpf;
        $this->altura= $altura;
        $this->peso  = $peso;
    }
    public function Getidade()
    {
    	Return $this->idade;
    }
    public function Setidade($i)
    {
        $this->idade = $i;
    }
    public function Getnome()
    {
    	Return $this->nome;
    }
    public function Getimc()
    {
    	Return $this->imc;
    }
    public function Getdata()
    {
    	Return $this->data;
    }
    public function Getcpf()
    {
    	Return $this->cpf;
    }
    public function Getaltura()
    {
    	Return $this->altura;
    }
    public function Getpeso()
    {
    	Return $this->peso;
    }
    public function Setnome($n)
    {
    	$this->nome = $n; 
    }
    public function Setimc($i)
    {
    	$this->imc  =$i;
    }
    public function Setdata($d)
    {
    	$this->data = $d;
    }
    public function Setcpf($c)
    {
    	$this->cpf = $c;
    }
    public function Setaltura($a)
    {
    	$this->altura = $a;
    }
    public function Setpeso($p)
    {
    	$this->peso = $p;
    }
    public function Calculaimc()
    {
        $this->Setimc($this->peso/($this->altura*$this->altura));
        $this->imc =number_format($this->imc,1);
        if ($this->imc <= 18.5){
            echo "<p>Voce está abaixo do peso! </p>";
            echo "<p>Coma frutas e beba agua! </p> "; 
        }elseif ($this->imc >18.5 && $this->imc <= 24.9){
            echo "<p>Voce está em seu peso normal! </p>";
            echo "<p>Coma frutas e beba agua! </p> ";
        }elseif ($this->imc >= 25.0 && $this->imc <= 29.9){
            echo "<p>Voce está com sobrepeso! </p>";
            echo "<p>Coma frutas e beba agua! </p> ";
            echo "<p>Faça exercicios saia dessa cadeira! </p>";
        }elseif ($this->imc >= 30.0 && $this->imc <= 34.9){
            echo "<p>Voce está com Obesidade grau 1!!!!!  </p>";
            echo "<p>Coma frutas e beba agua! </p> ";
            echo "<p>Caramba cara vamo começar a se cuidar!!!! </p> ";
        }elseif ($this->imc >= 35.0 && $this->imc <= 39.9){
            echo "<p>Voce está com obrsidade grau 2!!!!!!  </p>";
            echo "<p>Coma frutas e beba agua! </p> ";
        }elseif ($this->imc >40.0){
            echo "<p>voce está com obesidade grau 3!!!!  </p>";
            echo "<p>Coma frutas e beba agua! </p> ";
        }
    }
    public function Calculaidade()
    {
        $this->Setidade(2019 - $this->data);
    }
    public function validaCPF() {
 
        // Extrai somente os números
        $this->cpf = preg_replace( '/[^0-9]/is', '', $this->cpf );
         
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($this->cpf) != 10) {
            return false;
        }
        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $this->cpf)) {
            return false;
        }
        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $this->cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 10) % 10;
            if ($this->cpf{$c} != $d) {
                return false;
                echo("cpf invalido");
            }
        }
        return true;
       echo("cpf valido !");
    }
}