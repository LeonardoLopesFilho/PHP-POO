<?php

require_once'AnimalPoli.php'; 

class Ave extends Animal
{

	private $corPena;

    //Metodos especiais
    public function locomover()
    {
        echo "<p>Voando</p>";
    }
    public function alimentar()
    {
        echo "<p>Comendo Frutas</p>";
    }
    public function emitirsom()
    {
        echo "<p>Churima seu inperador retornou</p>";
    }
    public function FazerNinho()
    {
        echo "MINECRAFT NELES!";
    }
    public function GetcorPena()
    {
        return $this->corPena;
    }
    public function SetcorPena($pena)
    {
        $this->corPena = $pena;
    }
}