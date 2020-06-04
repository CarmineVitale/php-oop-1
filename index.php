<?php include 'movie_obj.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Fantozzi's Movies</h1>
    <div class="container">
        <div class="movie">
            <h2><?php echo $first_movie->title; ?></h2>
            <h4>Regista: <span><?php echo $first_movie->director; ?></span>  </h4>
            <h4>Anno: <span><?php echo $first_movie->year; ?></span>  </h4>
            <p> E' stato girato <?php echo $first_movie->howOldIs(2020); ?> anni fa </p>
            <h4>Durata film: <span><?php echo $first_movie->duration; ?> minuti</span>  </h4>
        </div>
        <div class="movie">
            <h2><?php echo $second_movie->title; ?></h2>
            <h4>Regista: <span><?php echo $second_movie->director; ?></span>  </h4>
            <h4>Anno: <span><?php echo $second_movie->year; ?></span>  </h4>
            <p> E' stato girato <?php echo $second_movie->howOldIs(2020); ?> anni fa </p>
            <h4>Durata film: <span><?php echo $second_movie->duration; ?> minuti</span>  </h4>
        </div>
        <div class="movie">
            <h2><?php echo $third_movie->title; ?></h2>
            <h4>Regista: <span><?php echo $third_movie->director; ?></span>  </h4>
            <h4>Anno: <span><?php echo $third_movie->year; ?></span>  </h4>
            <p> E' stato girato <?php echo $third_movie->howOldIs(2020); ?> anni fa </p>
            <h4>Durata film: <span><?php echo $third_movie->duration; ?> minuti</span>  </h4>
        </div>
    </div>
</body>
</html>