<!--create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative -->
<?php include "movie.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Document</title>
</head>
<body class="bg-dark w-100">

<!--Header-->
  <header>
    <nav class="navbar bg-success">
      <div class="container">
        <a class="navbar-brand" href="#">
          <H1 class="text-light">BoolflixPrime</H1>
        </a>
      </div>
    </nav>
  </header>
<!-- /Header-->

<!--Main-->
  <!-- Stampo i valori di Movie nella pagina-->
  <main class="w-75 mx-auto d-flex">
    <?php foreach ($movies as $Movie) { ?>
    <div class="card w-25 mx-auto bg-success text-center  text-light m-5">
      <h4 class="p-2">
        <?php echo $Movie->name; ?>
      </h4>
      <img class="w-75 h-75 mx-auto p-2 mb-2 bg-dark" src="<?php echo $Movie->poster ?>" alt="">
      <p>
        Lingua originale: <?php echo $Movie->language; ?>
      </p>
      <p>
        <?php echo $Movie->getStars(); ?>
      </p>
      <button class="rounded-pill w-50 mx-auto mb-3 bg-dark text-light">Download</button>
    </div>
    <?php } ?>
  </main>
<!-- /Main-->
</body>
</html>




