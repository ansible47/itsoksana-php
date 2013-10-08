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
  $path = "images/draperies/";
  $scripts = "";
?>

 
        <div class="row splash1 ">

            <div class="popup span_16">
            	<div id="pinitMain" >
	       			<a data-pin-do="buttonFollow" href="http://www.pinterest.com/heyox" >It's Oksana&trade;</a>
	       		</div>
                <div id="title" class="text span_10"><a href="home.php">draperies</a></div>
                 <div id="homepopup" class="span_4"><a href="home.php">(home)</a></div>
            </div>
       	</div>
        <div class="row span_16">
        <div id="gallery"> 
	
	
		<?php
		//path to directory to scan
		$directory = "../itsoksana/images/draperies/";

		//get all text files with a .txt extension.
		$texts = glob($directory . "*.[jJ][pP][gG]");
		$var = 0;
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
				echo "' class='gallery-img galsplash";
				echo $var;
				echo "' alt='"; 
				echo $captions[strtolower($filename)];
				echo "' /> </a>";
				$var = $var + 1;
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