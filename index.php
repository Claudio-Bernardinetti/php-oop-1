<?php

require_once './models/movie.php';
// Stampa i dettagli di ciascun film
foreach ($movies as $movie) {
    echo $movie->getDetails();
    echo "<br><br>";
}
