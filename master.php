<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title><?php echo $pagetitle ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <meta http-equiv="cleartype" content="on"/>

	<link rel="shortcut icon" href="/favicon.ico"/>

    <link rel="stylesheet" href="css/main.css" media="all"/>

    <link rel="stylesheet" href="css/responsive.gs.16col.css" media="all"/>
    <script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="scripts/respond.min.js"></script>
    <script type="text/javascript" src="scripts/scripts.js" ></script>

  <script type="text/javascript">  
  $(document).ready(function() {   
				$("body").css("opacity", "0.1");
				$("body").delay(200).animate({ opacity: 1 }, 200);
			});
            </script>
</head>
<body>
    <form id="form1" runat="server">
    <div class="container">
       <div class="main">
        <?php echo $pagemaincontent; ?> 
        <div id="foot">all images & content &copy; 2013 It&apos;s Oksana&trade;</div>
       </div>
    </div>
    </form>

    <script type="text/javascript" src="scripts/respond.min.js"></script>
       <script language="javascript" type="text/javascript">
       $(document).ready(function () {
           $(".headsplash1").css("opacity", "0");
           $(".headsplash2").css("opacity", "0");
           $(".splash1").css("opacity", "0");
           $(".splash2").css("opacity", "0");
           $(".splash3").css("opacity", "0");
           $(".splash4").css("opacity", "0");
           $(".splash5").css("opacity", "0");
           $(".splash6").css("opacity", "0");
           $(".headsplash1").delay(200).animate({ opacity: 1 }, 500);
           $(".headsplash2").delay(400).animate({ opacity: 1 }, 500);
           $(".splash1").delay(600).animate({ opacity: 1 }, 500);
           $(".splash2").delay(800).animate({ opacity: 1 }, 500);
           $(".splash3").delay(1000).animate({ opacity: 1 }, 500);
           $(".splash4").delay(1200).animate({ opacity: 1 }, 500);
           $(".splash5").delay(1400).animate({ opacity: 1 }, 500);
           $(".splash6").delay(1600).animate({ opacity: 1 }, 500);
           var isChrome = window.chrome;
           if (isChrome) {
               var offset = window.innerHeight * .75 - $("#headcontent").height();
               // is chrome 
           } else {
               var offset = window.innerHeight * .90 - $("#headcontent").height();
               // not chrome 
           }
           

           if (window.innerWidth > 768 & window.innerHeight > 480) {
               //alert("Setting height to: " + offset);
               $(".navimg1, .navimg2").css("height", offset + "px");

           }
           else {
               $(".navimg1").css("height", 380 + "px");
               $(".navimg2").css("height", 380 + "px");
           }

           //dev $("#windowSize").html(window.innerHeight + " - " + $("#headcontent").height() + " width: " + window.innerWidth);


           $(window).resize(function () {

               if (isChrome) {
                   var offset = window.innerHeight * .90 - $("#headcontent").height();
                   // is chrome 
               } else {
                   var offset = window.innerHeight * .90 - $("#headcontent").height();
                   // not chrome 
               }
               
               //dev $("#windowSize").html(window.innerHeight + " - " + $("#headcontent").height() + " width: " + window.innerWidth);

               if (window.innerWidth < 769) {
                   $(".navimg1, .navimg2").css("height", 380 + "px");
               }
               else {
                   $(".navimg1, .navimg2").css("height", offset + "px");
               }

           });

       });

    </script>

</body>
</html>
