<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Intro to PHP for Web Development</title>
    <link
        rel="stylesheet"
        type="text/css"
        href="../Intro-to-PHP-for-Web-Development/styles/styles.css"
      />
      <link
        rel="stylesheet"
        type="text/css"
        href="../Intro-to-PHP-for-Web-Development/styles/jumbotron.css"
      />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
      <?php
        //to include things in your website from other files
        include($_SERVER['DOCUMENT_ROOT'] . '/Intro-to-PHP-for-Web-Development/variables.php');
        include($_SERVER['DOCUMENT_ROOT'] . '/Intro-to-PHP-for-Web-Development/components/navbar.php');
        include($_SERVER['DOCUMENT_ROOT'] . '/Intro-to-PHP-for-Web-Development/components/jumbotron.php');
        
        include("homepagebody.php");

        include($_SERVER['DOCUMENT_ROOT'] . '/Intro-to-PHP-for-Web-Development/components/footer.php');
      ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>