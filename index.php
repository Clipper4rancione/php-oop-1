<?php

class Movie
{
    public $name;
    public $genre;
    public $year;
    public $movie_director;
    public $main_cast;
    public $language;


    /**
     * @param String $name
     * @param String $genre
     * @param Number $year
     * @param String $movie_director
     * @param String $language
     */

    public function __construct($_name, $_genre, $_year, $_movie_director, $_main_cast, $_language = null)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->year = $_year;
        $this->movie_director = $_movie_director;
        $this->main_cast = $_main_cast;
        $this->language = $_language;
    }
};

$film1 = new Movie("The Imitation Game", "Biographical, Drama", 2014, "Morten Tyldum", "Benedict Cumberbatch, Keira Knightley...", "ENG");

var_dump($film1);
