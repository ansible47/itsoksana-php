<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>It&apos;s Oksana</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <meta http-equiv="cleartype" content="on"/>

	<link rel="shortcut icon" href="/favicon.ico"/>

    <link rel="stylesheet" href="css/main.min.css" media="all"/>
<link rel="stylesheet" href="css/svwp_style.css" media="all"/>
    <link rel="stylesheet" href="css/responsive.gs.16col.css" media="all"/>
    
    <script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="scripts/respond.min.js"></script>
    <script type="text/javascript" src="scripts/scripts.js" ></script>
    <link rel="stylesheet" href="css/lightbox.css" media="all" />
    <script type="text/javascript" src="scripts/lightbox-2.6.min.js" ></script>
    <link rel="stylesheet" href="css/jquery.pinit.css" media="all" />
    

	<script type="text/javascript" id="cljs" src="https://itsoksana.cartloom.com/cart.js"></script>
	


    
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
    <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
    <script type="text/javascript" src="scripts/jquery.pinit.js"></script>
    <script src="scripts/jquery.slideViewerPro.1.0.js" type="text/javascript"></script> 

        <script language="javascript" type="text/javascript">
       $(document).ready(function () {
           $(".headsplash1").css("opacity", "0");
           $(".headsplash2").css("opacity", "0");
           $(".headsplash1").delay(500).animate({ opacity: 1 }, 500);
           $(".headsplash2").delay(1000).animate({ opacity: 1 }, 500);
         
           <?php echo $scriptcontent; ?> ;
       });
      

       
    </script>
     
</body>
<!--<script type="text/javascript" data-pin-hover="true"  src="//assets.pinterest.com/js/pinit.js"></script>-->
</html>