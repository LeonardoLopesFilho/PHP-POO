<?php

require_once'Mamifero.php'; 

class Lobo extends Mamifero
{
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
        echo "<p>AUUUUUU!!!!!</p>";
    }
}