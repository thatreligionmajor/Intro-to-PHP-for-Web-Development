<?php
  //to include things in your website from other files
  include("variables.php");
  ?>
<body>
  <div class="container">
    <center>
      <div class="row">
        <?php 
          echo "Strum into the heart of music with " . $your_name . ", your dedicated banjo guru. Whether you're a beginner itching to pick up the banjo for the first time or a seasoned player looking to enhance your skills, you've landed in the right spot.";
        ?>
      </div>
      <?php
        include("homecardrow.php");
            ?>
          </center>
  </div>
</body>