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

    <style>
        h2, h6, li, ul{
            color: white;
        }
    </style>


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

                    <h1 class="animate-intro">
                       Make our planet great again
                    </h1>

                </div> <!-- /twelve -->
            </div> <!-- /row -->
            <div class="info-entry">

                <div class="half-grey"></div>

                <div class="row info-entry-content">

                    <div class="media-wrap">
                        <div class="media animate-this" data-animate="fadeInRight">
                            <img src="images/equipe.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-six text-part">

                        <h2 class="animate-this" data-animate="fadeInLeft">L'équipe</h2>
                        <h6 class="animate-this" data-animate="fadeInLeft">
                            Chaque jour, 20 femmes et hommes mettent en
                            commun leurs talents pour développer des solutions de hautes technologies pour la durabilité et
                            la préservation de la biodiversité. De l’expertise à la gestion de programme complexe, découvrez
                            leurs métiers et les parcours de développement passionnants que vous propose DSL.
                        </h6>

                    </div>
                </div>
            </div> <!-- /info-entry-content -->
            <div class="info-entry">

                <div class="half-grey"></div>

                <div class="row info-entry-content">

                    <div class="media-wrap">
                        <div class="media animate-this" data-animate="fadeInLeft">
                            <div class="fluid-video-wrapper">
                                <img src="images/recrutement.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-six text-part">

                        <h2 class="animate-this" data-animate="fadeInRight">Recrutement</h2>

                        <h6 class="animate-this" data-animate="fadeInRight">
                            Le DSL est constamment
                            à la recherche de talents qui partagent ses convictions et sa ferveur pour la
                            protection de la vie sauvage et de la nature.
                        </h6>

                    </div>

                </div> <!-- /info-entry-content -->

            </div> <!-- /info-entry -->
            <div class="info-entry">


                <div class="row info-entry-content">



                    <h2 class="animate-this" data-animate="fadeInLeft">
                        DSL au quotidien :
                    </h2>
                    <ul>
                        <li>
                            De bonnes conditions de travail : un équilibre
                            vie privée et vie professionnelle, un environnement de travail agréable,
                            une ambiance conviviale et militante.
                        </li>
                        <li>
                            La rémunération : nous proposons un salaire minimum 15 % au-dessus du SMIC.
                            Le rapport entre le plus haut salaire et le plus bas salaire est de 3,6.
                            Nous bénéficions également d’une complémentaire-santé et de titres-restaurant
                            d’une valeur faciale de 9 euros.
                        </li>
                    </ul>


                </div> <!-- /info-entry-content -->

            </div> <!-- /info-entry -->
            <div class="info-entry">


                <div class="row info-entry-content">



                    <h2 class="animate-this" data-animate="fadeInLeft">
                        NOS OFFRES :
                    </h2>
                    <ul>
                        
                            Désolé, aucune offre est disponible
                            <br>
                            Cependant vous pouvez rejoindre un de nos partenaire pour un travail qui a du sens.
                        
                    </ul>
                    <ul>
                        
                            <a href="https://www.welcometothejungle.com/fr/companies/wwf-france/jobs">WWF</a>
                        <br>
                            <a href="https://www.greenpeace.fr/offre-d-emploi/cdd-charge%C2%B7e-de-relations-adherent%C2%B7es/">GreenPeace</a>
                       
                            
                    </ul>
                </div> <!-- /info-entry-content -->

            </div> <!-- /info-entry -->

        </section> <!-- /intro -->
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
