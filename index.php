<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
        <a href="home.php">   
        <div class="row col span_16">
           <img class="homeimage" src="images/homepagephotograph.jpg" alt="home image"/>
        </div>
        </a>
        <div class="row col span_16">
                <img class="defsplash1" src="images/hometext1.jpg" alt="it&apos;s"/>
                <img class="defsplash2" src="images/hometext2.jpg" alt="oksana"/>
        </div>
<?php
  //Assign all Page Specific variables
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Oksana Main Page";
  //Apply the template
  include("master.php");
?>