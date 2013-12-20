 <?php
  //Buffer larger content areas like the main page content
  ob_start();
?>

 
    <div id="shopHeader">
        <div class="row">
                <img class="headerimg" src="images/menu.jpg" alt="head icon" />
 
        </div>
        <div class="row">
        <br />
             <img class="headsplash1" src="images/hometext1.jpg" alt="it&apos;s"/>
             <img class="headsplash2" src="images/hometext2.jpg" alt="oksana &trade;"/>
             
           <!--  <div id="windowSize">this should change</div> -->
        <br />
        </div>
        <div id="title" class="text">shop</div>
      </div>
            	<a class="cartloom-viewcart viewcart" href="#" style="float:right;right:45px;position:absolute;top:25px;">View Cart</a>

      <div id="shopMain">

      	<div class="row">
      	<div class="span_5 item" >      	
      		<img src="images/shop/item1.jpg" class="shopImg" alt="" style="width:100%">
    		
    		<a class="cartloom-addtocart" href="https://itsoksana.cartloom.com/cart/add/96971"> <div class="addtocart">+Add to Cart</div></a>	
    		<a href="https://itsoksana.cartloom.com/cart/quickbuy/96971"><div class="buyitnow">Buy it now!</div></a>
		</div>
      	<div class="span_5 item" >
      		
      		<img src="images/shop/item2.jpg" class="shopImg" alt="" style="width:100%">
      		<a class="cartloom-addtocart" href="https://itsoksana.cartloom.com/cart/add/96972"><div class="addtocart">+Add to Cart</div></a>	
    		<a href="https://itsoksana.cartloom.com/cart/quickbuy/96972"><div class="buyitnow">Buy it now!</div></a>
    	</div>
      	<div class="span_5 item">
      		
      		<img src="images/shop/item3.jpg"  class="shopImg" alt="" style="width:100%">
      		<a class="cartloom-addtocart" href="https://itsoksana.cartloom.com/cart/add/96973"><div class="addtocart">+Add to Cart</div></a>	
    		<a href="https://itsoksana.cartloom.com/cart/quickbuy/96973"><div class="buyitnow">Buy it now!</div></a>
      	</div>
      	<div></div>
      	
      	
      	 <div class="span_5 item">
      		
      		<img src="images/shop/item4.jpg"  class="shopImg" alt="" style="width:100%">
      		<a class="cartloom-addtocart" href="https://itsoksana.cartloom.com/cart/add/96974"><div class="addtocart">+Add to Cart</div></a>	
    		<a href="https://itsoksana.cartloom.com/cart/quickbuy/96974"><div class="buyitnow">Buy it now!</div></a>
      		
      	</div>
      	
      	
      </div>
      

<?php
  //Assign all Page Specific variables
  $pagemaincontent = ob_get_contents();
  $scriptcontent = "";

  ob_end_clean();
  $pagetitle = "It's Oksana Shop";
  //Apply the template
  include("master-shop.php");
?>