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
}
