<footer id="main-footer">

   	<div class="footer-social-wrap">  
   		<div class="row">
					
	         <ul class="footer-social-list">
	            <li><a href="">
	             	<i class="fa fa-facebook-square"></i>
	            </a></li>
	            <li><a href="#">
	              	<i class="fa fa-twitter"></i>
	            </a></li>
              <li><a href="#">
	              	<i class="fa fa-google-plus"></i>
	            </a></li>
	         
	            <li><a href="#">
	              	<i class="fa fa-instagram"></i>
	            </a></li>
	         </ul>
		         
			</div> 
   	</div> <!-- /footer-social-wrap -->

	   <div class="footer-info-wrap">

	   	<div class="row footer-info">

			<div class="col-four tab-full collapse">
	   			<h4>Pages</h4>
                
	                <ul class="footer-link-list"><!-- ul Begin -->
	                	<?php
			
						echo"<li><a class='active' href='index.php' title=''>ACCUEIL</a></li>";
						echo"<li><a class='active' href='quisommesnous.php' title=''>QUI SOMMES-NOUS?</a></li>";
						echo"<li><a class='active' href='carriere.php' title=''>CARRIERE</a></li>";
						
						if(isset($_SESSION['customer_email'])){
			    			echo"<li><a class='active' href='../customer/my_account.php' title=''>MON COMPTE</a></li>";
						}else{
							echo"<li><a class='active' href='../checkout.php' title=''>CONNEXION</a></li>";
						}

						echo"<li><a class='active' href='contact.php' title=''>CONTACTEZ-NOUS</a></li>";
						?>
	                </ul><!-- ul Finish -->
		  	</div>
	  		

		   	<div class="col-four tab-full collapse">
	   			<h4><i class="icon-phone-incoming"></i> Vous avez une idée?</h4>

	   			<p>dsl.com<br>
					dsl-insa-cvl.fr<br>		     
				</p>
	   		</div>

	   		<div class="col-four tab-full">
	   			<h4><i class="icon-organization-hierarchy-3"></i> Nos partenariats</h4>

				   <ul class="footer-link-list">
				   	<li><a href="https://www.greenpeace.fr/">Greenpeace</a></li>
				   	<li><a href="https://www.insa-centrevaldeloire.fr/fr/">INSA Centre Val de Loire</a></li>
				  
				   </ul>
	   		</div>

			<div class="col-four tab-full">
	  			<h4><i class="icon-location-map-1"></i> Location</h4>

		  		<p>
		         INSA Centre Val de Loire<br>
		         Projet Web<br>
		         Blois, 2020
		        </p>
	  		</div>
		   	
	   </div> <!-- /footer-info-wrap -->
	   	
	   <div class="footer-bottom"> 

	   	<div class="copyright">
		     	<span>© Copyright Projet web 5ème année.</span> 
		     	<span>Design by Dat Pham, Louis Amblard, Stanislas Faure </span>	         	
		   </div>  		
   	</div>
	   	
   </footer>