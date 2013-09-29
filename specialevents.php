 <?php
  //Buffer larger content areas like the main page content
  ob_start();
  
  $captions = array(
    "01.jpg" => "It’s Oksana Design Studio. Designed by Bridget Crowe.",
    "02.jpg" => "It’s Oksana Design Studio. Designed by Bridget Crowe.",
    "03.jpg" => "It’s Oksana Design Studio. Designed by Bridget Crowe.",
    "04.jpg" => "It’s Oksana Design Studio. Designed by Bridget Crowe.",
    "05.jpg" => "It’s Oksana Design Studio. Designed by Oksana Ambroz. Installation at Intelligentsia Coffee, Chicago Loop Location. ",
	);
  $path = "images/specialevents/"
?>

 
        <div class="row splash1">
          
            <div class="popup">
                <div id="title" class="text"><a href="home.php">special events</a></div>
                 <div id="homepopup"><a href="home.php">(home)</a></div>
                 </div>
        </div>
        <div class="row span_16">
        <div id="gallery"> 
	
	
		<?php
		//path to directory to scan
		$directory = "../itsoksana/images/specialevents/";

		//get all text files with a .txt extension.
		$texts = glob($directory . "*.[jJ][pP][gG]");
		
		//print each file name
		foreach($texts as $text)
		{
			if (str_replace($directory, "", $text) != "."){
				$filename = str_replace($directory, "", $text);
				$text =  str_replace("../itsoksana/", "", $text);
				echo "<a href='";
				echo $text;
				echo "' data-lightbox='Special Events'; Title='";
				echo $captions[strtolower($filename)];
				echo "'> <img src='";
				echo $text;
				echo "' class='gallery-img' alt='img_'"; 
				echo strtolower($filename);
				echo "' /> </a>";
			}
		}
		?>

		</div>
    	</div>
            <div class="row">
            <a href="home.php">
                <img class="headerimg" src="images/menu.jpg" alt="head icon" />
            </a>
        </div>
        <div class="row">
        <br />
          <a href="home.php">
             <img class="headsplash1" src="images/hometext1.jpg" alt="it&apos;s"/>
             <img class="headsplash2" src="images/hometext2.jpg" alt="oksana &trade;"/>
          </a>
        </div>
            <div class="row splash2">
                 <div id="contact"><a href="contact.php">contact</a></div>
            </div>

<?php
  //Assign all Page Specific variables
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "Draperies";
  //Apply the template
  include("master-gallery.php");
?>