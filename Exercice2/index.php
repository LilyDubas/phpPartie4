<?php
$string = "Hello you";
function isItString($string){
  return $string;
}

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>PHP</title>
</head>
<body>
  <div class="jumbotron m-auto text-center">
    <h1>Fonctions</h1>
    <?= isItString('bye !');
     ?>
  </div>
</body>
</html>
