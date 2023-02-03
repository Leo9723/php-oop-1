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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>

<body>
    <div id="app" class="container">
        <div class="row">
            <div class="col" v-for="(film, index) in filmList">
                <div class="poster">
                    <img :src="film[0].immagine" alt="">
                </div>
                <div class="title">
                    {{ film[0].titolo }}
                </div>
                <div class="info">
                    <span>Lunghezza :{{film[0].lunghezza.ore}} {{film[0].lunghezza.minuti}}</span>
                    <div>
                        Genere:
                        <div class="genere">
                            <div v-for="genere in film[0].genere" class="single">{{ genere }}</div>
                        </div>
                    </div>
                    <div>
                        Membri del cast:
                        <div v-for="membro in film[0].cast">{{ membro }}</div>
                    </div>
                    <span>Uscita: {{ film[0].rilascio }}</span>
                    <div v-if="film[0].saga">Saga di films</div>
                    <div v-else=>Film autoconclusivo</div>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/script.js"></script>
</body>

</html>