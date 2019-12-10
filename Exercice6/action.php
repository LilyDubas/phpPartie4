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
      <!-- affiche le genre. "htmlspecialchars" perlet d'afficher les caractères spéciaux -->
    <p>  Bonjour <?php echo htmlspecialchars($_POST['lastName'])?> <?php echo htmlspecialchars($_POST['firstName']); ?>,
      tu as <?php echo ($_POST['age']); ?> ans.
    </p>
    </div>
    </body>
</html>
