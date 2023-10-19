<?php

class Movie
{
    public $title;
    public $language;
    public $genres;

    // Costruttore
    public function __construct($title, $language, $genres) 
    {
        $this-> title = $title;
        $this-> language = $language;
        $this-> genres = $genres;
    }
    // Metodo per ottenere i dettagli del film
    public function getDetails() 
    {
      return "Titolo: " . 
      $this->title . ", Lingua: " . $this->language . ", Genere: " . implode(", ", $this->genres);
    }
}

$movie_1 = new Movie ('Rambo', 'Inglese', ['Azione']); 
$movie_2 = new Movie ('Romanzo Criminale', 'Italiano', ['Thriller', 'Dramma']); 
$movie_3 = new Movie ('The Witcher', 'Inglese', ['Fantascienza', 'Azione']); 
var_dump($movie_3);

echo $movie_1->getDetails();
echo "<br><br>";
echo $movie_2->getDetails();
echo "<br><br>";
echo $movie_3->getDetails();