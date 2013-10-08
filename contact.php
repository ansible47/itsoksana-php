  <?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
  
           <div class="row splash2" >
                 <div class="row">
                        <a href="home.php">
                            <img class="headerimg" src="images/menu.jpg" alt="head icon" />
                        </a>
                    </div>
                    <div class="row">
                    <br />
                        <a href="home.php">
                         <img class="headsplash1" src="images/hometext1.jpg" alt="it's"/>
                         <img class="headsplash2" src="images/hometext2.jpg" alt="oksana"/>
                         </a>
                    <br />
                    </div>
                    <br />
                <div id="biopic" style="width:100%;">
                     <img src="images/oksana.jpg" alt="Oksana Picture" title="Oksana" />
                </div>

                <div class="popup">
                    <div class="row splash1">
                        <div id="email"  class="bigtext text"><a href="mailto:oksana@itsoksana.com">oksana@itsoksana.com</a></div>
                    </div>
                    <br />
                    <div class="row splash1">
                        <div id="email"  class="bigtext text"><a href="http://www.itsoksana.blogspot.com">itsoksana.blogspot.com</a></div>
                    </div>
                    <div class="row splash2">
                    <br />
                         <div class="bigtext text"><a>773.387.6968</a></div>
                         <br /> <Br />
                        <div  class="bigtext text"> 1821 West Hubbard Studio 308 <br /> Chicago IL 60622 </div>

                    </div>

                </div>
                
                <div id="bio" class="text"> 
                <br />
                    Bio:<br /><br />
                    
                    Oksana was born in the Ukraine, where she studied Art and Music. Her career began as a ceramic and porcelain designer. <br /><br />

                    She was invited to bring her porcelain Christmas ornament collection to New York in 1997. Once in the United States, she began working with interior designers utilizing soft furnishings.. This rekindled her old love for sewing and textiles. <br /><br />

                    Arriving in Chicago, she built up a number of clients through word-of-mouth recommendations alone. Soon, she was sought out by a number of interior designers for her innovative style and techniques. <br /><br />

                    After completing a course in Laser Cutting Techniques in London, she decided to bring this innovative technique to her work. Original designs as well as custom designs are now available and challenge the status quo of soft furnishings. <br /><br />
                </div>
            </div>
            
<?php
  //Assign all Page Specific variables
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Oksana Home";
  //Apply the template
  include("master.php");
?>