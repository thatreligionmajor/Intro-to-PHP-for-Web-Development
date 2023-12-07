<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intro to PHP for Web Development</title>
    <link rel="stylesheet" type="text/css" href="styles.css"/>
	  <link rel="stylesheet" type="text/css" href="card.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/Intro-to-PHP-for-Web-Development/variables.php');
?>

<body>
  <div>
      <center class="homepagebody">
      <?php
          include($_SERVER['DOCUMENT_ROOT'] . '/Intro-to-PHP-for-Web-Development/components/navbar.php');
      ?>
      <h1>lessons</h1>
      <?php
          include($_SERVER['DOCUMENT_ROOT'] . '/Intro-to-PHP-for-Web-Development/cardrow.php');
          include($_SERVER['DOCUMENT_ROOT'] . '/Intro-to-PHP-for-Web-Development/components/footer.php');
      ?>
    </center>
  </div>
</body>

