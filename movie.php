<?php
//Creo la classe movie 
class Movie
{
//Definisco variabili e creo un costruttore
  public $name;
  public $language;
  public $poster;
  public $vote;
  public $stars;

  function __construct($_name, $_language, $_poster, $_stars, $_vote = [])  {
    $this->name = $_name;
    $this->language = $_language;
    $this->poster = $_poster;
    $this->stars = $_stars;
    $this->vote = $_vote;
  }

    // Creo la funzione che inserisce i voti nell'array vote
  public function insertvote($_vote) {
    $this->vote[] = $_vote;
  }
  // Creo la funzione che calcola la valutazione media
  public function getAveragevote()  {
    $voteSum = 0;
    foreach ($this->vote as $vote) {
      $voteSum += $vote;
    }
    $avgvote = ceil($voteSum / count($this->vote) / 2);
      return $avgvote;
    }
  
    public function getStars() {
      for ($i = 1; $i <= 5; $i++) {
          if ($i <= $this->stars) {
              echo "<i class=\"fas fa-star text-warning\"></i>";
          } 
    }
  }}

//aggiungo le varie valutazioni ai film 
$film1 = new Movie("Titanic", "Inglese" , "https://m.media-amazon.com/images/I/91kGQq7PfeL._AC_SL1500_.jpg", "5" );
$film1->insertvote(8);
$film1->insertvote(6);
$film1->insertvote(9);
$film1->insertvote(9);

$film2 = new Movie("Rush", "Inglese", "https://m.media-amazon.com/images/I/91XKb+nepOL._SY445_.jpg", "3");
$film2->insertvote(6);
$film2->insertvote(8);
$film2->insertvote(7);
$film2->insertvote(6);

$film3 = new Movie("Attack on Titan", "Giapponese", "https://m.media-amazon.com/images/I/71hQnRHkSaL._SL1422_.jpg", "4");
$film3->insertvote(8);
$film3->insertvote(9);
$film3->insertvote(9);
$film3->insertvote(9);

//Pusho le variabili(valutazioni) nell'array movies
$movies = [];
$movies[] = $film1;
$movies[] = $film2;
$movies[] = $film3;

?>