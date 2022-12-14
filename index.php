<?php

class Movie
{
    public $name;
    public $original_title;
    public $genre;
    public $year;
    public $movie_director;
    public $main_cast;
    public $language;


    /**
     * @param String $name
     * @param String $original_title
     * @param String $genre
     * @param Number $year
     * @param String $movie_director
     * @param String $language
     */

    public function __construct($_name, $_original_title, $_genre, $_year, $_movie_director, $_main_cast, $_language)
    {
        $this->name = $_name;
        $this->original_title = $_original_title;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->movie_director = $_movie_director;
        $this->main_cast = $_main_cast;
        $this->language = $_language;
    }
};

$film1 = new Movie("The Imitation Game", "The Imitation Game", "Biographical, Drama", 2014, "Morten Tyldum", "Benedict Cumberbatch, Keira Knightley...", "ENG");

$film2 = new Movie("Codice Genesi", "The Book of Eli", "Action", 2010, "Albert e Allen Hughes", "Denzel Washington, Gary Oldman...", "ENG");

var_dump($film1);
var_dump($film2);
