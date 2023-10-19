<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <!-- Title -->
</head>
<body>
    <div>
        <?php
    // Stampa i dettagli di ciascun film
        foreach ($movies as $movie) {
            echo $movie->getDetails();
            echo "<br><br>";
        }
        ?>
    </div>
</body>
</html>

