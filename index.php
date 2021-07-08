<?php
    require __DIR__ . "/classes/Movie.php";
    $castMovie1 = [
        "Pierpaolo Bello",
        "Marcello Gustavo",
        "Gianpiero Marchesino"
    ];
    $castMovie2 = ["Perialbero Frustato", "Marcello Bello", "Niky H. Boston", "Marcelo Furbon"];
    $movies = [
        
        $movie1 =  new Movie("Una casa bella",3, "en", "Un giorno un ragazzo vide una casa, la casa più bella vista fin'ora", $castMovie2,"https://movieplayer.net-cdn.it/t/images/2010/10/04/la-locandina-di-johnny-il-bello-177438_jpg_300x300_crop_q85.jpg"),

        $movie2 = new Movie("Titolo", 4,"it", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat atque perferendis suscipit voluptatem eligendi, dolorum maxime possimus maiores labore amet in nostrum enim recusandae vel illo esse voluptas ex blanditiis temporibus beatae iure id alias at! Quos ratione laboriosam optio non nulla, mollitia illo suscipit ea! Optio dolorem provident sunt.", $castMovie1),

        $movie3 = new Movie("Non ho veramente fantasia", 5, "it", "Non ho fantasia per il titolo, figurati per la descrizione", ["Gianni Bertolini", "Me Medesimo"],"https://www.cinefacts.it/foto/h!fantasia-poster-locandina-cinefacts.jpg")
    ];
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/index.css">
    <title>Movie</title>
</head>
<body>
    <?php include_once __DIR__ . "/partials/header.php"?>
    <div class="container d-flex">
        <?php foreach($movies as $movie){?>
            <div class="card">
            <div class="img-container">
                <img src=<?=$movie->url?> alt=<?=$movie->title?>>
            </div>
            <h2><?=$movie->title?></h2>
            <div class="rating">
                <?php $movie->getRating();?>
            </div>
            <h4><?= $movie->language?></h4>
            <div class="cast">
                Cast: <br>
                <?php
                    foreach ($movie->cast as $actor) {?>
                        <span><?=$actor?></span>, 
                <?php };?>
            </div>
            <div class="short-description">
                <h4>Descrizione rapida</h4>
                <p><?=$movie->getShortDescription()?></p>
            </div>
            <div class="description">
                <?=$movie->description?>
            </div>
        </div>
        <?php };?>
    </div>
</body>
</html>