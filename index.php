<!--create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative -->
<?php
//Creo la classe movie 
class Movie
{
//Definisco variabili e creo un costruttore
  public $name;
  public $language;
  public $valutation;

  function __construct($_name, $_language, $_valutation = [])  {
    $this->name = $_name;
    $this->language = $_language;
    $this->valutation = $_valutation;
  }

    // Creo la funzione che inserisce i voti nell'array valutation
  public function insertValutation($_valutation) {
    $this->valutation[] = $_valutation;
  }
  // Creo la funzione che calcola la valutazione media
  public function getAverageValutation()  {
    $valutationSum = 0;
    foreach ($this->valutation as $valutation) {
      $valutationSum += $valutation;
    }
    $avgValutation = $valutationSum / count($this->valutation);
      return $avgValutation;
    }
}

//aggiungo le varie valutazioni ai film 
$film1 = new Movie("Titanic", "Inglese");
$film1->insertvalutation(8);
$film1->insertvalutation(9);
$film1->insertvalutation(9);
$film1->insertvalutation(9);

$film2 = new Movie("Rush", "Inglese");
$film2->insertvalutation(6);
$film2->insertvalutation(8);
$film2->insertvalutation(7);
$film2->insertvalutation(6);

$film3 = new Movie("La vita è bella", "Italiano");
$film3->insertvalutation(8);
$film3->insertvalutation(9);
$film3->insertvalutation(9);
$film3->insertvalutation(9);

//Pusho le variabili(valutazioni) nell'array movies
$movies = [];
$movies[] = $film1;
$movies[] = $film2;
$movies[] = $film3;

?>

<!-- Stampo il risultato nella pagina-->

<?php foreach ($movies as $Movie) { ?>
  <h4>
   <?php echo $Movie->name; ?>
  </h4>
  <p>
    <?php echo $Movie->language; ?>
  </p>
  <p>
    Valutazione media: <?php echo $Movie->getAveragevalutation(); ?>
  </p>
<?php } ?>
