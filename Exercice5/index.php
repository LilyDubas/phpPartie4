<?php
$aString = "This is ";
$aNumber = 42;
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
    <h1>What's THE answer?</h1>
    <?php
    function answer($aString, $aNumber){
    echo $aString . $aNumber;
  };
     answer($aString,$aNumber);
    ?>
  </div>
</body>
</html>
