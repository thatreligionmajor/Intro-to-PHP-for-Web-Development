<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Listen</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Lessons</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Testimonials</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact</a></li>
    </ul>
    <p class="text-center text-muted">
    <?php
        include("variables.php");
      ?>
    <?php
        //to include things in your website from other files
        echo "Copyright © " . $company_name . " " . 
        date("Y") . " - All Rights Reserved";
      ?>
  </footer>