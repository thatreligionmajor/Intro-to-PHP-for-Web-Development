<link href="../styles/styles.css" rel="stylesheet" type="text/css">
<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="/intro-to-php-for-web-development/" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="/intro-to-php-for-web-development/pages/listen.php" class="nav-link px-2 text-muted">Listen</a></li>
      <li class="nav-item"><a href="/intro-to-php-for-web-development/pages/lessons.php" class="nav-link px-2 text-muted">Lessons</a></li>
      <li class="nav-item"><a href="/intro-to-php-for-web-development/pages/about.php" class="nav-link px-2 text-muted">About</a></li>
      <li class="nav-item"><a href="/intro-to-php-for-web-development/pages/testimonials.php" class="nav-link px-2 text-muted">Testimonials</a></li>
      <li class="nav-item"><a href="/intro-to-php-for-web-development/pages/contact.php" class="nav-link px-2 text-muted">Contact</a></li>
    </ul>
    <p class="text-center text-muted">
    <?php
      include($_SERVER['DOCUMENT_ROOT'] . '/Intro-to-PHP-for-Web-Development/variables.php');
    ?>
    <?php
        //to include things in your website from other files
        echo "Copyright © " . $company_name . " " . 
        date("Y") . " - All Rights Reserved";
      ?>
  </footer>