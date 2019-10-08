<?php

require_once'Lobo.php'; 

class cachorro extends Lobo
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
        echo "<p>AU! au ! au !!!!!</p>";
    }
}