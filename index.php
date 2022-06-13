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
      return ceil($avgValutation);
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Document</title>
</head>
<body class="bg-dark w-100">
  <h1 class="text-white text-center my-5">Film consigliati</h1>
  <main class="w-75 mx-auto d-flex">
    <?php foreach ($movies as $Movie) { ?>
    <div class="card w-25 mx-auto text-center m-5">
      <h4>
        <?php echo $Movie->name; ?>
      </h4>
      <p>
        <?php echo $Movie->language; ?>
      </p>
      <p>
        Valutazione media: <?php echo $Movie->getAveragevalutation(); ?>
      </p>
    </div>
    <?php } ?>
  </main>
</body>
</html>




