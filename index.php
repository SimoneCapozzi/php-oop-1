<?php
  require_once __DIR__ ."/Movie.php";

  //film 1
  $film1 = new Movie("Waterworld", "Kevin Reynolds");
  $film1->anno = "1995";
  $film1->durata = "135 min";
  $film1->setGenere("Fantascienza, Avventura");
  $film1->setAttori("Kevin Costner, Jeanne Tripplehorn, Tina Majorino");
  var_dump($film1);

  //film 2
  $film2 = new Movie("C'era una volta a... Hollywood", "Quentin Tarantino");
  $film2->anno = "2019";
  $film2->durata = "161 min";
  $film2->setGenere("Commedia,Drammatico");
  $film2->setAttori("Leonardo DiCaprio, Brad Pitt, Margot Robbie, Dakota Fanning, Margaret Qualley");
  var_dump($film2);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <hr>
 <h1>IL primo film è: <?php echo $film1->titolo ?></h1>
 <h2>Regia di: <?php echo $film1->regia?></h2>
 <h3>Info: Attori famosi: <?php echo $film1->getAttori() ?> // - <?php echo $film1->getInfo() ?> // - Genere (<?php echo $film1->getGenere() ?>)</h3>
 <hr>

 <h1>IL secondo film è: <?php echo $film2->titolo ?></h1>
 <h2>Regia di: <?php echo $film2->regia?></h2>
 <h3>Info: Attori famosi: <?php echo $film2->getAttori() ?> // - <?php echo $film2->getInfo() ?> // - Genere (<?php echo $film2->getGenere() ?>)</h3>
 <hr>

 <h1>le istanze create sono: <?php echo Movie::getFilms() ?></h1>

</body>
</html>