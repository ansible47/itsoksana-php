 <?php
  //Buffer larger content areas like the main page content
  ob_start();
  
  $captions = array(
    "01.jpg" => "Verde Design Studio. Designer Michele Fitzpatrick. Draperies by It&apos;s Oksana.",
    "02.jpg" => "Verde Design Studio. Designer Michele Fitzpatrick. Draperies by It&apos;s Oksana.",
    "03.jpg" => "Verde Design Studio. Designer Michele Fitzpatrick. ML Design Studio. Designer Matt Lorenz. Draperies by It&apos;s Oksana.",
    "04.jpg" => "ML Design Studio. Designer Matt Lorenz. Draperies by It&apos;s Oksana.",
    "05.jpg" => "Designer Mary Chiaro. Draperies by It&apos;s Oksana.",
    "06.jpg" => "Verde Design Studio. Designer Michele Fitzpatrick. Draperies by It&apos;s Oksana.",
    "07.jpg" => "Verde Design Studio. Designer Michele Fitzpatrick. Draperies by It&apos;s Oksana.",
    "08.jpg" => "Verde Design Studio. Designer Michele Fitzpatrick. Draperies by It&apos;s Oksana.",
    "09.jpg" => "Verde Design Studio. Designer Michele Fitzpatrick. Draperies by It&apos;s Oksana.",
    "10.jpg" => "Verde Design Studio. Designer Michele Fitzpatrick. Draperies by It&apos;s Oksana.",
    "11.jpg" => "Verde Design Studio. Designer Michele Fitzpatrick. Draperies by It&apos;s Oksana.",
    "12.jpg" => "Designer Sharon McNerney. Draperies by It&apos;s Oksana.",
    "13.jpg" => "Designer Sharon McNerney. Draperies by It&apos;s Oksana.",
    "14.jpg" => "LB Design. Draperies by It&apos;s Oksana.",
    "15.jpg" => "LB Design. Draperies by It&apos;s Oksana.",
    "16.jpg" => "Verde Design Studio. Designer Michele Fitzpatrick. Draperies by It&apos;s Oksana.",
    "17.jpg" => "Verde Design Studio. Designer Michele Fitzpatrick. Draperies by It&apos;s Oksana.",
	);
  $path = "images/draperies/"
?>

 
        <div class="row splash1">
          
            <div class="popup">
                <div id="title" class="text"><a href="home.php">draperies</a></div>
                 <div id="homepopup"><a href="home.php">(home)</a></div>
                 </div>
        </div>
        <div class="row span_16">
        <div id="gallery"> 
	
	
		<?php
		//path to directory to scan
		$directory = "../itsoksana/images/draperies/";

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
				echo "' data-lightbox='Draperies'; Title='";
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