<?php

class film
{
    public $titolo;
    public $immagine;
    public $lunghezza;
    public $genere;
    public $rilascio;
    public $tipologia;
    public $saga;
}

class lunghezza
{
    public $ore;
    public $minuti;

    function __construct($_ore, $_minuti)
    {
        $this->ore = $_ore;
        $this->minuti = $_minuti;
    }
}

//creare metodo che con un flag ti mette film true se ha piu films oppure film false se è autoconclusivo in $tipologia.


//fare un construct con ore e minuti per comporre lunghezza



$titolo_1 = 'Il signore degli anelli, la compagnia dell\'anello';
$immagine_1 = '';
$ore_1 = '2h';
$minuti_1 = '58m';
$lunghezza_1 = new lunghezza($ore_1, $minuti_1);
$genere_1 = ['Fantasy', 'Avventura'];
$cast_1 = ['Elijah Wood', 'Viggo Mortesen', 'Ian McKellen'];
$rilascio_1 = '2001';
$saga = true;


$titolo_2 = 'Harry Potter e la pietra filosofale';
$immagine_1 = '';
$ore_2 = '2h';
$minuti_2 = '32m';
$lunghezza_2 = new lunghezza($ore_2, $minuti_2);
$genere_2 = ['Fantasy', 'Avventura'];
$cast_2 = ['Daniel Radcliffe', 'Emma Watson', 'Rupert Grint'];
$rilascio_2 = '2001';
$saga = true;


$titolo_3 = 'Grand Budapest Hotel';
$immagine_1 = '';
$ore_3 = '1h';
$minuti_3 = '40m';
$lunghezza_3 = new lunghezza($ore_3, $minuti_3);
$genere_3 = ['Commedia', 'Drammatico'];
$cast_3 = ['Ralph Fiennes', 'Tony Revolori', 'Adrien Brody'];
$rilascio_3 = '2014';
$saga = false;
