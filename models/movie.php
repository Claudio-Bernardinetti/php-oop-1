<?php

require_once 'db.php';

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
