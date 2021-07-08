<?php
    require __DIR__ . "/classes/Movie.php";
    $castMovie1 = [
        "Pierpaolo Bello",
        "Marcello Gustavo",
        "Gianpiero Marchesino"
    ];
    $movie1 = new Movie("Titolo", 4,"it", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat atque perferendis suscipit voluptatem eligendi, dolorum maxime possimus maiores labore amet in nostrum enim recusandae vel illo esse voluptas ex blanditiis temporibus beatae iure id alias at! Quos ratione laboriosam optio non nulla, mollitia illo suscipit ea! Optio dolorem provident sunt.", $castMovie1);
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
        <div class="card">
            <div class="img-container">
                <img src=<?=$movie1->url?> alt=<?=$movie1->title?>>
            </div>
            <h2><?=$movie1->title?></h2>
            <div class="rating">
                <?php $movie1->getRating();?>
            </div>
            <h4><?= $movie1->language?></h4>
            <div class="cast">
                Cast: <br>
                <?php
                    foreach ($movie1->cast as $actor) {?>
                        <span><?=$actor?></span>, 
                <?php };?>
            </div>
            <div class="description">
                <?=$movie1->description?>
            </div>
        </div>
    </div>
</body>
</html>