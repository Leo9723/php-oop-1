<?php


include __DIR__ . '/database.php'

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
        <div>
            <?php
            echo $film_1->getMovieDetails();
            echo '<br>';
            echo $film_2->getMovieDetails();
            echo '<br>';
            echo $film_3->getMovieDetails();
            ?>
        </div>
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