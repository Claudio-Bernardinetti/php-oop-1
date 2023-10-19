<?php

class Movie
{
    public $title;
    public $language;
    public $generes;

    // Costruttore
    public function __construct($title, $language, $generes) 
    {
        $this-> title = $title;
        $this-> language = $language;
        $this-> generes = $generes;
    }
    // Metodo per ottenere i dettagli del film
    public function getDetails() 
    {
      return "Titolo: " . 
      $this->title . ", Lingua: " . $this->language . ", Genere: " . $this->generes;
    }
}

$movie_1 = new Movie ('Rambo', 'Inglese', 'Azione');
$movie_2 = new Movie ('Romanzo Criminale', 'Italiano', 'Thriller');
$movie_3 = new Movie ('The Witcher', 'Inglese', 'Fantascienza');
var_dump($movie_3);

echo $movie_1->getDetails();
echo "<br><br>";
echo $movie_2->getDetails();
echo "<br><br>";
echo $movie_3->getDetails();