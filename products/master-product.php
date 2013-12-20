<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title>It&apos;s Oksana</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <meta http-equiv="cleartype" content="on"/>

	<link rel="shortcut icon" href="/favicon.ico"/>

    <link rel="stylesheet" href="css/main.min.css" media="all"/>

    <link rel="stylesheet" href="css/responsive.gs.16col.css" media="all"/>
    <script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="scripts/respond.min.js"></script>
    <script type="text/javascript" src="scripts/scripts.js" ></script>
<script type="text/javascript" src="scripts/jquery.sliderViewerPro.1.5.js" ></script>
    
    <link rel="stylesheet" href="css/lightbox.css" media="all" />
    <script type="text/javascript" src="scripts/lightbox-2.6.min.js" ></script>
    <link rel="stylesheet" href="css/jquery.pinit.css" media="all" />
	<script type="text/javascript" id="cljs" src="https://itsoksana.cartloom.com/cart.js"></script>
	


    

            
</head>
<body>
    <form id="form1" runat="server">
    <div class="container">
       <div class="main">
        <?php echo $pagemaincontent; ?> 
        <div id="prodFoot" class="text">all images & content &copy; 2013 It&apos;s Oksana&trade;</div>


       </div>
    </div>
    </form>
    <script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
    <script type="text/javascript" src="scripts/jquery.pinit.js"></script>
    
            <script language="javascript" type="text/javascript">

           <?php echo $scriptcontent; ?> ;
       	$(window).bind("load", function() {
    		$("div#basic").slideViewerPro();
   		 }); 
     
    </script>


     
</body>
</html>