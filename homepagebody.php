<?php
  //to include things in your website from other files
  include("variables.php");
  ?>
<body>
  <div class="container">
    <center>
      <div class="bg-light mb-3">
        <?php 
        echo "Book now: " . $company_number;
        ?>
      </div>
      <?php
        include("homecardrow.php");
            ?>
          </center>
  </div>
</body>