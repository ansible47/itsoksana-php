function testfunc(input) {
    alert(input + "This is from javascript, bitch!");

}

function showImagesLightbox(input, dest, type) {
    var pics = input.split(";");

    pics = removeFinalElement(pics);

    dest = "#" + dest.toString();

      var output = "";

      var picsPerRow = 3;

      var picInfo = ""

      for (var x = 0; x < pics.length; x++) {
          picInfo = pics[x].split(",");

              if ((x) % picsPerRow == 0) {
                  //alpha (for no border)
                  output += "<a href='images/" + type + "/" + picInfo[0].toString() + "' data-lightbox='" + type + "' Title='" + picInfo[1].toString() + "'>";
                  output += "<img src='images/" + type + "/" + picInfo[0].toString() + "' class='gallery-img alpha galsplash" + x + "' alt='img_" + (x + 1).toString() + "' />";
                  output += "</a>";
              }
              else {
                  output += "<a href='images/" + type + "/" + picInfo[0].toString() + "' data-lightbox='" + type + "' Title='" + picInfo[1].toString() + "'>";
                  output += "<img src='images/" + type + "/" + picInfo[0].toString() + "' class='gallery-img galsplash" + x + "' alt='img_" + (x + 1).toString() + "' />";
                  output += "</a>";
              }
    }

      $(document).ready(function () {
          $(dest).html(output);
      
          for (var x = 0; x < pics.length - 1; x++){
            $((".galsplash" + x)).css("opacity", "0");
            $((".galsplash" + x)).delay(200*(x+1)).animate({ opacity: 1 }, 500);
          }
          // Handler for .ready() called.
      });
}

function removeFinalElement(input) {
    var output = new Array();
    for (var x = 0; x < input.length - 1; x++) {
        output[x] = input[x]
    }

    return output
}

function shuffle(array) {
    var m = array.length, t, i;

    // While there remain elements to shuffle…
    while (m) {

        // Pick a remaining element…
        i = Math.floor(Math.random() * m--);

        // And swap it with the current element.
        t = array[m];
        array[m] = array[i];
        array[i] = t;
    }

    return array;
}

/*
 * 			$filename = str_replace($directory, "", $text);
				$text =  str_replace("../itsoksana/", "", $text);
				$pinit = getPinit($text, $captions[strtolower($filename)]);
				$thumbnail = str_replace("images/", "images/thumbnails/", $text);
				//echo "<div class='gallery-img-container galsplash" . $var ."'>";
				
				echo "<div class='pinner' id='img_".$var."'>";
				
				echo "<a class='' href='" . $text . "' rel='lightbox-Draperies' title='" . $captions[strtolower($filename)] ."' > ";
				echo "<img src='". strtolower($thumbnail) ."' class='gallery-img'  alt='" . str_replace("\"", "\'", $captions[strtolower($filename)]) . "' onClick='getPin(\"#social_".$var . "\")'  />";
				echo "</a>";
				echo "<div class='social' id='social_".$var . "'>".$pinit."</div>";
				echo "</div>";
 */

	
function fillMainGallery(images){
	split = images.split(",");
	gallery = $('#galleryMain');
	//alert(split)
		var loaded = 0;
		for (var x = 0; x<split.length-1; x++){
				
	            var url =  split[x].replace("../itsoksana/", "");
	            
	            var thumb = url.replace("images", "images/thumbnails");
	            
	            a = document.createElement("a");
	            a.href = url;
	            a.rel="lightbox"
	            a.title ="Hello!"
                img = document.createElement('img');
                img.className = "gallery-img"
                img.alt = "Image " + x.toString();
                a.appendChild(img)
                        // lazy show the photos one by one
                        //alert(img)
                img.src=thumb
                gallery[0].appendChild(a);
                img.onload = function(e, count){
                   img.onload = null;
           
                                gallery.append("Hello!");
                        
                                setTimeout( function(){
                                        $(img).addClass('loaded');
                                }, 25*loaded);
                                
                        };
                        loaded=+1;
                        
                        img['largeUrl'] = url
                        img.src = thumb
		}
}

			

function loadImagesInSequence(images) {
  if (!images.length) {
    return;
  }
  
  alert(images)

  var img = new Image(),
  url = images.shift();

  img.onload = function(){ loadImagesInSequence(images) };
  img.src = url;
  
  
  
}