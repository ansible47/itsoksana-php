<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>

    <div id="headcontent">
        <div class="row">
                <img class="headerimg" src="images/menu.jpg" alt="head icon" />
                <div id="socialmedia">
                    <a href="https://www.facebook.com/itsoksanastudio" class="socialbutton"><img src="images/icon-facebook.png"  class="icon" alt="facebook" /></a>
                    <a href="http://instagram.com/its_oksana" class="socialbutton"><img src="images/icon-instagram.png" class="icon" alt="instagram" /> </a>
                    <a href="http://itsoksana.blogspot.com/"><img src="images/icon-blogspot.jpg" class="icon" alt="blogspot" /> </a>
                    <a href="http://www.pinterest.com/heyox/"><img src="images/icon-pinterest.png" alt="pinterest" class="icon" /> </a>
                </div>
        </div>
        <div class="row">
        <br />
             <img class="headsplash1" src="images/hometext1.jpg" alt="it&apos;s"/>
             <img class="headsplash2" src="images/hometext2.jpg" alt="oksana &trade;"/>
           <!--  <div id="windowSize">this should change</div> -->
        <br />
        </div>
        <div class="popup">
            <div class="row splash1">
                <div id="contact" class="text"> <a href="contact.aspx">contact</a></div>
            </div>
        </div>
      </div>
      
        <div class="row" id="bodycontent">
         <div class="col span_4" id="nav1">
               <a href="draperies.php" class="bounce">
                     <img class="splash1 navimg1" src="images/menuimg1.jpg" alt="" style=""/>
                     <img class="splash2 navtext" src="images/drapariestext.jpg" alt="" style=""/>
               </a>
              <!--  <div class="rotate"  style="">draperies</div>-->
            </div>
            <div class="col span_6" id="nav2">
               <a href="lasercuttings.php" class="bounce">
                <img class="splash3 navimg2" src="images/menuimg2.jpg" alt=""  style=""/>
                <img class="splash4 navtext2" src="images/lasercuttingtext.jpg" alt="" style=""/>
               </a>
              <!--<div class="navtext rotate" style="">laser cuttings</div>-->
            </div>
            <div class="col span_4" id="nav3">
                <a href="specialevents.php" class="bounce">
                 <img class="splash5 navimg1" src="images/menuimg3.jpg" style="" alt=""/>
                 <img class="splash6 navtext3" src="images/specialeventstext.jpg" alt="" style=""/>
                 </a>
               <!--<div class="navtext rotate" style="">special events</div>-->
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