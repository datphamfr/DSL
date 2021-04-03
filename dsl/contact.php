<!DOCTYPE html>

<html lang="en">
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>DSL - Data System Learning</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css"> 
   <link rel="stylesheet" href="css/vendor.css"> 
   <link rel="stylesheet" href="css/main.css">    

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   

</head>

<body id="top">
	
	<!-- header 
   ================================================== -->
   <header class="main-header">
   	
   	<div class="logo">
	      <a href="index.html">DSL</a>
	</div> 

	   <a class="menu-toggle" href="#"><span>Menu</span></a>   	

   </header>

   <!-- main navigation 
   ================================================== -->
   <?php 
    	include("includes/Navigation.php");
    ?>


	<!-- main content wrap
   ================================================== -->
   <div id="main-content-wrap">


		<!-- main content wrap
   	================================================== -->
   	<section id="intro">

		   <!-- <div class="shadow-overlay"></div> -->
		   
		   <div class="row intro-content">
		   	<div class="col-twelve">

		   		<h3 class="animate-intro"> CONTACTEZ-NOUS</h3>
			  		
					<h1 class="animate-intro">
						Vous avez des questions?
					</h1>	

			  	</div> <!-- /twelve --> 		   			
		   </div> <!-- /row -->   

		</section> <!-- /intro -->


   <!-- subscribe
   ================================================== -->
   <section id="subscribe">
		   
	<div class="row subscribe-content">
	   <div class="col-twelve">

		  <h2 class="h01 animate-this">N'HESITEZ PAS DE POSER VOS QUESTIONS EN REMPLIR CE FORMULAIRE</h2>
		  <form id="mc-form" class="group" novalidate="true" autocomplete="off">

			  <div class="row">
				  <div class="col-eight tab-full left animate-this" data-animate="fadeInLeft">					
					<input type="email" value="" name="EMAIL" class="name" id="mce-EMAIL" placeholder="Nom et prénom" required="">			   				
				  </div>

				  <div class="col-eight tab-full left animate-this" data-animate="fadeInLeft">					
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email" required="">			   				
				 </div>
				 
				 <div class="col-eight tab-full left animate-this" data-animate="fadeInLeft">					
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Numéro de téléphone" required="">			   				
				 </div>

				 <div class="col-eight tab-full left animate-this" data-animate="fadeInLeft">					
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Sujet" required="">			   				
				 </div>

				 <div class="col-eight tab-full left animate-this" data-animate="fadeInLeft">					
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Votre idée" required="">			   				
				 </div>


				<div class="col-four tab-full right animate-this"  data-animate="fadeInRight">
					<input type="submit" value="Envoyer" name="subscribe" class="button large">
				</div>				   		
				
			  </div> <!-- /row -->	

			  <label for="mce-EMAIL" class="subscribe-message"></label>
			   
			   </form>
	   
	   </div>
	</div>
		   
 </section> <!-- /subscribe -->		

</div> <!-- /main-content-wrap -->



   <!-- footer
	================================================== -->
	<?php 
    	include("includes/FooterDSL.php");
    ?>

   <div id="go-top">
		<a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
	</div>

   <!-- preloader
   ================================================== -->
   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>