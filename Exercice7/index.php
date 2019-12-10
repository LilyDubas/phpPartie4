
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
    <h1>Vous êtes...?</h1>
    <form action="action.php" method="post">
      <p>
        <input type="radio" name="gender"
        value="femme">Femme
      </p>
      <p>
        <input type="radio" name="gender"
        value="homme">Homme
      </p>

      <p>Votre age: <input type="number" name="age" /></p>
      <p><input type="submit" /></p>
    </form>

  </div>
</body>
</html>
