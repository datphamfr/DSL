
<?php 
if(isset($_SESSION['customer_email'])){
    
    echo "<script>window.open('../my_account.php','_self')</script>";
    
}

    $active='Account';
    include("includes/Header.php");

?>
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Acceuil</a>
                   </li>
                   <li>
                       Se connecter
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
  
               
           </div><!-- col-md-3 Finish -->
           <div class="col-md-6"><!-- col-md-9 Begin -->
           
           <?php 
           
           if(!isset($_SESSION['customer_email'])){
               
               include("customer/customer_login.php");
               
           }else{
               
               echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
               
           }
           
           ?>
           
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
 
 <!-- preloader
   ================================================== -->
   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 



    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
</html>