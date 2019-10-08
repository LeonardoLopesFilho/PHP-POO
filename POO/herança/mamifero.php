<?php

require_once'AnimalPoli.php'; 

class Mamifero extends Animal
{

	private $corPelo;

    //Metodos especiais
    public function locomover()
    {
        echo "<p>Correndo</p>";
    }
    public function alimentar()
    {
        echo "<p>Mamando</p>";
    }
    public function emitirsom()
    {
        echo "<p>WHOWWWWW!!!!!</p>";
    }
    public function GetcorPelo()
    {
        return $this->corPelo;
    }
    public function SetcorPelo($cor)
    {
        $this->corPelo = $cor;
    }
}