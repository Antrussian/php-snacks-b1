<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php

$partite = array(
    array(
        'squadra1' => 'Milan',
        'squadra2' => 'Napoli',
        'puntiSquadra1' => 2,
        'puntiSquadra2' => 1,
    ),
    array(
        'squadra1' => 'Juventus',
        'squadra2' => 'Roma',
        'puntiSquadra1' => 3,
        'puntiSquadra2' => 0,
    ),
    array(
        'squadra1' => 'Inter',
        'squadra2' => 'Lazio',
        'puntiSquadra1' => 1,
        'puntiSquadra2' => 1,
    ),
    array(
        'squadra1' => 'Fiorentina',
        'squadra2' => 'Atalanta',
        'puntiSquadra1' => 2,
        'puntiSquadra2' => 2,
    ),
    array(
        'squadra1' => 'Sampdoria',
        'squadra2' => 'Genoa',
        'puntiSquadra1' => 0,
        'puntiSquadra2' => 1,
    ),
);

foreach ($partite as $partita) {
    echo $partita['squadra1'] . ' - ' . $partita['squadra2'] . ' | ' . $partita['puntiSquadra1'] . '-' . $partita['puntiSquadra2'] . '<br>';
}

?>


</body>
</html>
