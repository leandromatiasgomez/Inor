<head>
  <meta charset="utf-8">
  <title>Inor</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="img/Inor1.png" rel="icon">
  <link href="styles/bootstrap.css" rel="stylesheet">
  <link href="styles/styleInor.css" rel="stylesheet">
  <link href="img/favicon.ico" rel="icon">
  <link rel="icon" href="img/icon.ico">
  <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/9817c2b4db.js" crossorigin="anonymous"></script>
  </head>

  <body>
    <header>
      <?php require_once "navbar.php"; ?>
    </header>

    <?php
      $section= (isset($section)) ? $section: 'home';
      require_once $section . '.php';
    ?>

    <footer>
      <?php require_once "footer.php"?>
    </footer>
  </body>

</html>