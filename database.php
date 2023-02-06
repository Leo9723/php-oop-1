<?php

include __DIR__ . '/models/film.php';

include __DIR__ . '/models/lunghezza.php';






$titolo_1 = 'Il signore degli anelli, la compagnia dell\'anello';
$immagine_1 = './img/Signore.jpg';
$ore_1 = '2h';
$minuti_1 = '58m';
$lunghezza_1 = new lunghezza($ore_1, $minuti_1);
$genere_1 = ['Fantasy', 'Avventura'];
$cast_1 = ['Elijah Wood', 'Viggo Mortesen', 'Ian McKellen'];
$rilascio_1 = '2001';
$saga_1 = true;

$film_1 = new film($titolo_1, $immagine_1, $lunghezza_1, $genere_1, $cast_1, $rilascio_1, $saga_1);



$titolo_2 = 'Harry Potter e la pietra filosofale';
$immagine_2 = './img/Potter.jpg';
$ore_2 = '2h';
$minuti_2 = '32m';
$lunghezza_2 = new lunghezza($ore_2, $minuti_2);
$genere_2 = ['Fantasy', 'Avventura'];
$cast_2 = ['Daniel Radcliffe', 'Emma Watson', 'Rupert Grint'];
$rilascio_2 = '2001';
$saga_2 = true;

$film_2 = new film($titolo_2, $immagine_2, $lunghezza_2, $genere_2, $cast_2, $rilascio_2, $saga_2);



$titolo_3 = 'Grand Budapest Hotel';
$immagine_3 = './img/Budapest.jpg';
$ore_3 = '1h';
$minuti_3 = '40m';
$lunghezza_3 = new lunghezza($ore_3, $minuti_3);
$genere_3 = ['Commedia', 'Drammatico'];
$cast_3 = ['Ralph Fiennes', 'Tony Revolori', 'Adrien Brody'];
$rilascio_3 = '2014';
$saga_3 = false;

$film_3 = new film($titolo_3, $immagine_3, $lunghezza_3, $genere_3, $cast_3, $rilascio_3, $saga_3);


$filmsArray = [[$film_1], [$film_2], [$film_3]];

file_put_contents('films.json', json_encode($filmsArray));
