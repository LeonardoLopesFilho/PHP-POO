<?php

require_once'AnimalPoli.php'; 

class Peixe extends Animal
{

	private $corEscama;

    //Metodos especiais
    public function locomover()
    {
        echo "<p>nadando</p>";
    }
    public function alimentar()
    {
        echo "<p>Comendo substancias ficando doidão</p>";
    }
    public function emitirsom()
    {
        echo "<p>glub glub</p>";
    }
    public function SoltarBolha()
    {
        echo "<p>Glubs Glub</p>";
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