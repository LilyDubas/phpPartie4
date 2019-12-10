<?php
$firstNumber = 22;
$secondNumber = 6;
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
    <h1>Comparaison</h1>
    <?php
    function numberCompare($firstNumber,$secondNumber)
    {
      if ($firstNumber > $secondNumber)
      {
        echo $firstNumber.' est plus grand que '.$secondNumber.'.';
      }
      elseif ($firstNumber == $secondNumber)
      {
        echo 'Les deux nombres sont égaux.';
      }
      else {
        echo $firstNumber.' est plus petit que '.$secondNumber.'.';
      }
    }

    numberCompare($firstNumber, $secondNumber);
    ?>
  </div>
</body>
</html>
