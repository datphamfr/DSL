<?php 

session_start();

include("includes/db.php");

?>

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
	      <a href="index.php">DSL</a>
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

					<h1 class="animate-intro">
						Make our planet great again !
					</h1>	

			  	</div> <!-- /twelve --> 		   			
		   </div> <!-- /row -->   

		</section> <!-- /intro -->
	</div>

		<!-- features
   	================================================== -->
		<section id="features">

			<div class="row section-intro group animate-this">	
	   		<div class="col-twelve with-bottom-line">

	   			<h2 class="">Digitaliser pour la planète!</h2>
				 <p class="lead">Chaque jour, 4 000 animaux en tout genre sont suivis 
				   grâce à nos capteurs GPS pour comprendre leur comportement.<br />
				   De plus avec une intelligence artificielle performante, nourris par 
				   une grande base de donnée, nous pouvons prédire où se trouve la 
				   majorité des espèces animal.
				  </p>
	   		</div>   		
	   	</div>

			<div class="row features-wrap">
					     		
				<div class="features-list block-1-3 block-s-1-2 block-tab-full">

					<div class="bgrid feature animate-this">	

						<span class="feature-count">01.</span>            

					   <div class="feature-content">

              	   	<h3>Données GPS</h3>

							<p> Grâce à nos produits vous pouvez suivre un animal sur une carte
						   </p>
						         		
						</div> 	         	 

					</div> <!-- /bgrid -->

					<div class="bgrid feature animate-this">	

						<span class="feature-count">02.</span>            

					   <div class="feature-content">

              	   	<h3>La détection</h3>

							<p> Avec l'intelligence artificielle et d'un micro, identifiez les especes presentent sur un secteur donné.
						   </p>
						         		
						</div> 	         	 

					</div> <!-- /bgrid -->

					<div class="bgrid feature animate-this">	

						<span class="feature-count">03.</span>            

					   <div class="feature-content">

              	   	<h3>L'intelligence Artificielle</h3>

							<p> Ultra performante, vous pourrez identifiez des sons, predir la localisation d'espèces
						   ou encore suivre la démographie d'une population
						   </p>
						         		
						</div> 	         	 

					</div> <!-- /bgrid -->


				</div> <!-- /features-list --> 				

			</div> <!-- /features-wrap -->
			
		</section> <!-- /features -->


		<!-- infos
   	================================================== -->
   	<section id="infos">

   		<div class="info-entry">

   			<div class="half-grey"></div>

   			<div class="row info-entry-content">

   				<div class="media-wrap">
   					<div class="media animate-this"  data-animate="fadeInRight">
   						<img src="images/article1.jpg" alt="">
   					</div>   				      				
   				</div>

   				<div class="col-six text-part">   				
   					
   					<h5 class="animate-this" data-animate="fadeInLeft">Environnement News</h5>
   					<h2 class="animate-this" data-animate="fadeInLeft">Emmanuel Macron, abandonnez l’accord UE-Mercosur</h2>

   					<p class="animate-this" data-animate="fadeInLeft">Le 2 juin 2017, alors que Donald Trump annonce que les Etats-Unis se retirent de l’Accord de Paris, vous annoncez vouloir #MakeOurPlanetGreatAgain.</p>

   					<a href="https://www.greenpeace.fr/lettre-ouverte-mercosur/" class="button animate-this" data-animate="fadeInLeft">Plus d'info</a>
   			 					
   				</div>   				
   				
   			</div> <!-- /info-entry-content -->

   		</div> <!-- /info-entry -->

   		<div class="info-entry">

   			<div class="half-grey"></div>

   			<div class="row info-entry-content">
   			
	            <div class="media-wrap">
	            	<div class="media animate-this" data-animate="fadeInLeft">
	            		<div class="fluid-video-wrapper">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/Tho_4XXBpD4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>		            </div>
	            	</div>   				
	   			</div>

	   			<div class="col-six text-part">   				
   					
   					<h5 class="animate-this" data-animate="fadeInRight">Notre métier en vidéo</h5>
   					<h2 class="animate-this" data-animate="fadeInRight">Pose de balise GPS sur balaine</h2>

   					<p class="animate-this" data-animate="fadeInRight">Nous vous accompagnons jusqu'à la pose de 
					  nos produits</p>

   					<a href="#" class="button animate-this" data-animate="fadeInRight">Plus d'infos</a>
   			 					
   				</div>

   			</div> <!-- /info-entry-content -->

   		</div> <!-- /info-entry -->

   	</section> <!-- infos -->


		<!-- stats
   	================================================== -->
   	<section id="stats" class="count-up">

			<div class="row">
				<div class="col-twelve">

					<div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

						<div class="bgrid stat">

							<div class="icon-part">
								<i class="icon-pencil-ruler"></i>
							</div>

							<h3 class="stat-count">200</h3>

							<h5 class="stat-title">
								Espèces suivies
							</h5>

						</div> <!-- /stat -->					

						<div class="bgrid stat">

							<div class="icon-part">
								<i class="icon-location-user"></i>
							</div>

							<h3 class="stat-count"> 12</h3>

							<h5 class="stat-title">
								ONG nous ont fait confiance
							</h5>

						</div> <!-- /stat -->

						<div class="bgrid stat">

							<div class="icon-part">
								<i class="icon-rewards-medal-1"></i>
							</div>

							<h3 class="stat-count">9.3</h3>

							<h5 class="stat-title">
								Recommandation de nos clients	
							</h5>

						</div> <!-- /stat -->									

						<div class="bgrid stat">

							<div class="icon-part">
								<i class="icon-alien"></i>
							</div>

							<h3 class="stat-count">4000</h3>

							<h5 class="stat-title">
								Animaux tracés
							</h5>

						</div> <!-- /stat -->

						<div class="bgrid stat">

							<div class="icon-part">
								<i class="icon-coffee-mug"></i>
							</div>

							<h3 class="stat-count">12</h3>

							<h5 class="stat-title">
								Différentes IA
							</h5>

						</div> <!-- /stat -->

						<div class="bgrid stat">

							<div class="icon-part">
								<i class="icon-hourglass"></i>
							</div>

							<h3 class="stat-count">10000</h3>

							<h5 class="stat-title">
								heures de travail
							</h5>

						</div> <!-- /stat -->

					</div> <!-- /stats-list -->

				</div> <!-- /twelve -->
			</div> <!-- /row -->

		</section> <!-- /stats -->



	   <!-- fondateurs
   	================================================== -->
	   <section id="fondateurs">
	   	<div class="row fondateur-content">
	   		<div class="col-twelve">

	   			<h2 class="h01 animate-this">
                  Fondateurs
               </h2>

					<div id="fondateur-slider" class="flexslider animate-this">
						<ul class="slides">	
						   <li>
							  	<p>&ldquo;La vie est belle &rdquo;</p>
							  	<p class="author-info">&mdash; Louis AMBLARD &mdash;</p>
							</li>						
							<li>
								<p>&ldquo; Préservons l'environnement &rdquo;</p>
								<p class="author-info">&mdash; Dat PHAM &mdash;</p>
							</li>						
							<li>
							  	<p>&ldquo;Oui&rdquo;</p>
							  	<p class="author-info">&mdash; Stanislas FAURE &mdash;</p>
							</li>
						</ul>
					</div>

					<div class="flexslider-controls animate-this">
					   <ul class="flex-control-nav">
					      <li><img src="images/fondateur1.jpg" alt=""></li>
					      <li><img src="images/fondateur2.jpg" alt=""></li>
					      <li><img src="images/fondateur3.jpg" alt=""></li>
					   </ul>
					</div>
						
	   		</div>
	   	</div>
	   </section> <!-- /fondateurs -->


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
