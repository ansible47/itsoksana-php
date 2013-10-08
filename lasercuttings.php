 <?php
  //Buffer larger content areas like the main page content
  ob_start();
  
  $captions = array(
    "01.jpg" => "It’s Oksana Design Studio. Designed by George Ambroz.",
    "02.jpg" => "It’s Oksana Design Studio. Designed by George Ambroz.",
    "03.jpg" => "It’s Oksana Design Studio. Designed by George Ambroz. Installation at Intelligentsia Coffee, Chicago Loop Location.",
    "04.jpg" => "It’s Oksana Design Studio. Designed by George Ambroz.",
    "05.jpg" => "It’s Oksana Design Studio. Designed by George Ambroz.",
    "06.jpg" => "It’s Oksana Design Studio. Designed by George Ambroz.",
    "07.jpg" => "It’s Oksana Design Studio. Designed by George Ambroz.",
    "08.jpg" => "It’s Oksana Design Studio. Designed by George Ambroz.",
    "09.jpg" => "It’s Oksana Design Studio. Designed by Bridget Crowe.",
    "10.jpg" => "It’s Oksana Design Studio. Designed by Bridget Crowe.",
    "11.jpg" => "It’s Oksana Design Studio. Designed by Bridget Crowe.",
    "12.jpg" => "It’s Oksana Design Studio. Designed by Bridget Crowe.",
	);
  $path = "images/lasercuttings/"
?>

 
        <div class="row splash1">
          
                      <div class="popup span_16">
            	 	<div id="pinitMain" >
	       			<a data-pin-do="buttonFollow" href="http://www.pinterest.com/heyox" >It's Oksana&trade;</a>
	       		</div>
                <div id="title" class="text span_10"><a href="home.php">laser cuttings</a></div>
                 <div id="homepopup" class="span_4"><a href="home.php">(home)</a></div>
            </div>
        </div>
        <div class="row span_16">
        <div id="gallery"> 
	
	
		<?php
		//path to directory to scan
		$directory = "../itsoksana/images/lasercuttings/";

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
				echo "' data-lightbox='Laser Cuttings'; Title='";
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
  $scriptcontent = "";
  $var = 0;
  foreach($texts as $text){
  	$scriptcontent .= "$('.galsplash" . $var . "').css('opacity', '0');" . "\r";
  	$scriptcontent .= "$('.galsplash" . $var . "').delay(200*(";
	$scriptcontent .=  $var+1 ;
	$scriptcontent .=  ")).animate({ opacity: 1 }, 500);" . "\r";
	$var = $var + 1;
	};
  ob_end_clean();
  $pagetitle = "Draperies";
  //Apply the template
  include("master-gallery.php");
?>