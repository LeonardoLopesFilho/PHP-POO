<?php

require_once'AnimalPoli.php'; 

class Reptil extends Animal
{

	private $corEscama;

    //Metodos especiais
    public function locomover()
    {
        echo "<p>Rastejando</p>";
    }
    public function alimentar()
    {
        echo "<p>Comendo Vegetais</p>";
    }
    public function emitirsom()
    {
        echo "<p>XESQUE</p>";
    }
    public function GetcorEscama()
    {
        return $this->corEscama;
    }
    public function SetcorEscama($es)
    {
        $this->corEscama = $es;
    }
}