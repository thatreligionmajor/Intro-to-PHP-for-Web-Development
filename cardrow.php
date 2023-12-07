<link href="card.css" rel="stylesheet" type="text/css">
<?php
  //to include things in your website from other files
  include("variables.php");
  ?>
<div class="row">
<div class="col-3">
  <div class="card" style="width: 18rem;">
    <img src="https://images.unsplash.com/photo-1626155215432-f2eb18552910?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
        class="card-img-top" alt="close up image of a man playing a banjo">
    <div class="card-body">
      <h5 class="card-title">Tailored Lessons</h5>
          <p class="card-text">
              <?php
                  echo "No matter your skill level, "
                  . $your_name .
                  " customizes lessons to suit your pace and musical interests. From bluegrass twangs to folk melodies, your banjo journey is uniquely yours."
                  ?>
          </p>
    </div>
  </div>
</div>
  <div class="col-3">
    <div class="card" style="width: 18rem;">
      <img src="https://images.unsplash.com/photo-1692501735268-30251c6a30e3?q=80&w=2127&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
          class="card-img-top" alt="close up image of a man playing a banjo">
      <div class="card-body">
        <h5 class="card-title">Flexible Learning</h5>
            <p class="card-text">
              <?php
                  echo " Life is busy, but that shouldn't hinder your musical pursuits. "
                  . $company_name . " offers flexible scheduling, ensuring that your banjo lessons seamlessly fit into your lifestyle."
              ?>
            </p>
      </div>
    </div>
  </div>
  <div class="col-3">
  <div class="card" style="width: 18rem;">
    <img src="https://images.unsplash.com/photo-1628434285435-935b8c9328be?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
        class="card-img-top" alt="close up image of a man playing a banjo">
    <div class="card-body">
      <h5 class="card-title">Holistic Approach</h5>
          <p class="card-text">
            <?php
                echo "Banjo playing is not just about technique; it's about expressing your soul through the strings."
                . $your_name . 
                "brings a holistic approach, blending technique, theory, and the sheer joy of playing."
            ?>
          </p>
    </div>
  </div>
</div>
<div class="col-3">
  <div class="card" style="width: 18rem;">
    <img src="https://images.unsplash.com/photo-1599866193011-348f9eb29868?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
        class="card-img-top" alt="close up image of a man playing a banjo">
    <div class="card-body">
      <h5 class="card-title">Passion for Teaching</h5>
          <p class="card-text">
            <?php
                echo $your_name .
                "'s passion for banjo is contagious. Expect an enthusiastic and supportive environment where your musical aspirations take center stage."
            ?>
          </p>
    </div>
  </div>
</div>
</div>