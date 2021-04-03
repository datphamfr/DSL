

<nav id="menu-nav-wrap">

		<div class="button"><!-- col-md-6 offer Begin -->
   			<a>
               <?php 
                   
                   echo "Bienvenue";
               
               ?>
           </a>
           
       </div><!-- col-md-6 offer Finish -->


       <h3>Navigation</h3>
		<ul class="nav-list">
			<?php
			
			echo"<li><a class='active' href='index.php' title=''>ACCUEIL</a></li>";
			echo"<li><a class='active' href='quisommesnous.php' title=''>QUI SOMMES-NOUS?</a></li>";
			echo"<li><a class='active' href='carriere.php' title=''>CARRIERE</a></li>";
			
			if(isset($_SESSION['customer_email'])){
    			echo"<li><a class='active' href='customer/my_account.php' title=''>MON COMPTE</a></li>";
			}else{
				echo"<li><a class='active' href='checkout.php' title=''>CONNEXION</a></li>";
			}

			echo"<li><a class='active' href='contact.php' title=''>CONTACTEZ-NOUS</a></li>";
			?>
		</ul>
	</nav> <!-- /menu-nav-wrap -->