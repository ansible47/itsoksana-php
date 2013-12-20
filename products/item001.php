<?php
  //Buffer larger content areas like the main page content
  ob_start();
?>
         
        <div class="row">
               <div id="basic" class="svwp">
			    <ul>
				    <li><img width="710" height="290" alt="Anemone - G.C. Mingati" src="images/shop/item1.jpg" /></li>
				    <li><img width="710" height="290" alt="House of Cards, 2008 - James Frost, Director of Technology Aaron Koblin" src="images/shop/item2.jpg" /></li>
				    <li><img width="710" height="290" alt="Emitter - G.C. Mingati" src="images/shop/item3.jpg" /></li>
				    <li><img width="710" height="290" alt="Meander - P.J. Onori" src="images/04.jpg" /></li>
				    <!-- eccetera -->
			    </ul>
			    </div> 
        
           
           <div class="col shopDesc text col span_7">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod 
           	tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, 
           	quis nostrud exercitation ullam corper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </div>
           	<div class=" col prodButton span_5">
       			<a class="cartloom-addtocart" href="https://itsoksana.cartloom.com/cart/add/96971"> <div class="addtocart">+Add to Cart</div></a>	
    			<a href="https://itsoksana.cartloom.com/cart/quickbuy/96971"><div class="buyitnow">Buy it now!</div></a>	
       		</div>
        </div>
       	

<?php
  //Assign all Page Specific variables
  $pagemaincontent = ob_get_contents();
  $scriptcontent = "";
  $pagetitle = "Oksana Product Page";
  ob_end_clean();
  //Apply the template
  include("master-product.php");
?>