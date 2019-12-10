<?php
$truth = "hello";
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
    <?php
 function isItTrue(){
   $truth = true;
   return $truth;
 }
    echo isItTrue();
     ?>
  </div>
</body>
</html>
