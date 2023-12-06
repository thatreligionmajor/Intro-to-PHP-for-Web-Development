<?php
  //to include things in your website from other files
  include("variables.php");
  ?>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
        <p class="card-text">
            <?php
                echo "At " . $company_name . 
                ", we believe that music is more than just notes—it's an emotion, a journey, and a celebration of life. "
                . $your_name .
                ", with over 30 years of banjo mastery, is here to guide you through every pluck, strum, and chord."
                ?>
        </p>
  </div>
</div>