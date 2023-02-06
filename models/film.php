<?php

class film
{
    public $titolo;
    public $immagine;
    public $lunghezza;
    public $genere;
    public $cast;
    public $rilascio;
    public $saga;

    function __construct($_titolo, $_immagine, $_lunghezza, $_genere, $_cast, $_rilascio, $_saga)
    {
        $this->titolo = $_titolo;
        $this->immagine = $_immagine;
        $this->lunghezza = $_lunghezza;
        $this->genere = $_genere;
        $this->cast = $_cast;
        $this->rilascio = $_rilascio;
        $this->saga = $_saga;
    }

    public function getMovieDetails()
    {
        return $this->titolo . "-" . $this->rilascio;
    }
}
