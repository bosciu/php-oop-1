<?php
    require __DIR__ . "/classes/Movie.php";
    $movie1 = new Movie("Titolo", 5,"it", "Testo prova");
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/index.css">
    <title>Movie</title>
</head>
<body>
    <?php include_once __DIR__ . "/partials/header.php"?>
</body>
</html>