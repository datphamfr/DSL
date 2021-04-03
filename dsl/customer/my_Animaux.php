<!------------------------------------------------------------------------------------------
Nom: my_Animal.php

Emplacement: Ce code est importer dans my_account.php dans la partie central

Fonction: -On affiche un tableau comportant tout les animaux appartenant au client connecter
          -Recuperation des données de tracage d'un animal
          -Supperession d'un animal
          -Emission d'un signal auditif pour trouver l'animal (démarrage du ventillo et des resistance)
          -Ajout d'un animal pour un utilisateur

Auteur:Stanislas FAURE (DSL)
------------------------------------------------------------------------------------------->

<head>
    <meta charset="utf-8">
    <title>Table Animaux</title>
    <link rel="stylesheet" href="styles/tableau.css"><!--CSS du tableau des animaux uniquement-->
</head>

<?PHP
//On teste si le formulaire a été soumis
  if (isset($_POST['ajouter']))
  {  //on se connecte au serveur de dsl
    $con = @mysql_connect("localhost","root","","dsl");

  if (! $con)
  { //en cas d'erreur on renvoi un message et on retourne sur la plage de my_Animaux.php
    die("ne pourrait pas se relier : ". mysql_error ());
  }

  mysql_select_db ("dsl", $con) ;
  $customer_email = $_SESSION['customer_email'];//recuperation du mail du client connecte

  //ecriture de la commande pour ajouter l'animal du formulaire
  $insert_animal = " INSERT INTO animal (animal_id,animal_name,animal_age,animal_size,animal_type,animal_owner) VALUES ('$_POST[c_IdTraceur]','$_POST[c_nom]','$_POST[c_age]','$_POST[c_taille]','$_POST[c_espece]','$customer_email')";

    if (!mysql_query($insert_animal,$con))//envoie de la commande au serveur
    {
      die('impossible d’ajouter cet animal : ' . mysql_error());
    }
    echo "<script>alert('L’animal est ajouté')</script>";
    mysql_close($con);
}


//On teste si le bouton supprimer a été soumis
if (isset($_POST['supprimer']))
  {

    $con = @mysql_connect("localhost","root","","dsl");
 
  //ecriture de la commande pour supprimer l'animal correspondant
    $sql="DELETE FROM animal WHERE animal_id = '$_POST[supprimer]'";
    mysql_select_db ("dsl", $con) ;
 
    if (! mysql_query($sql,$con))
    {
      die('impossible de supprimer cet animal : ' . mysql_error());
    }
    echo "<script>alert('L’animal est supprimer')</script>";
    mysql_close($con);
}


//On teste si le bouton rechercher a été soumis
if (isset($_POST['rechercher']))
  {
    $con = @mysql_connect("localhost","root","","dsl");
    mysql_select_db ("dsl", $con) ;
    
    include '../Modbus/enregistrer.php'; // insertion du code de reception des donnees du recepteur
    enregistrer($_POST['rechercher']); // recuperation des données et actualisation de l'animal correspondant
  }

//On teste si le bouton sonner a été soumis
if (isset($_POST['sonner']))
  {
    include '../Modbus/Ecriture.php';// insertion du code d'ecriture des donnees du recepteur
    Sonner();//envoie de la commande pour faire sonner le traceur
  }

if (isset($_POST['finsonner']))
  {
    include '../Modbus/Ecriture.php';// insertion du code d'ecriture des donnees du recepteur
    FinSonner();//envoie de la commande pour arreter de faire sonner le traceur
  }
?>
<?php

try
{
  // On se connecte à la base de donnée de dsl sur MySQL
  $bdd = new PDO('mysql:host=localhost;dbname=dsl;charset=utf8', 'root', '');
}

catch(Exception $e)
{
  // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$customer_session = $_SESSION['customer_email'];//recuperation de l'adresse du client connecter
?>

<body>
  <center class="wrapper"><!--ecriture du tableau des animaux appartenent au client connecter-->
    <table class="table_animal">
        <thead >
            <tr class="row header"><!--ecriture de l'entete-->
                <th class="cell">Id Animal</th>
                <th class="cell">Nom</th>
                <th class="cell">Age <small>(années)</small></th>
                <th class="cell">Taille <small>(cm)</small></th>
                <th class="cell">Espèce</th>
                <th class="cell"><center>Tracer</center></th>
                <th class="cell"><center>Sonner</center></th>
                <th class="cell"><center></center></th>
            </tr>
        </thead>

        <tbody >
          <?php
          $reponse = $bdd->query('SELECT * FROM animal');//recuperation de la liste des tout les animaux de la base de données de dsl

          // On affiche chaque entrée une à une
          while ($donnees = $reponse->fetch())//on parcour tout les animaux
          {
            if($customer_session == $donnees['animal_owner'])//si un anmail appartient au client connecter on l'ajoute au tableau
            {//ajout des données de l'animal a chacune des cellules de la ligne correspondante
              echo ("<tr class='row'><td class='cell'>");
              echo  $donnees['animal_id'];
              echo ("</td><td class='cell'>");
              echo  $donnees['animal_name'];
              echo ("</td><td class='cell'>");
              echo  $donnees['animal_age'];
              echo ("</td><td class='cell'>");
              echo  $donnees['animal_size'];
              echo ("</td><td class='cell'>");
              echo  $donnees['animal_type'];
              echo ("</td><td class='cell'><center>");
              echo ("<form action='my_account?my_Animaux' method='post' enctype='multipart/form-data'><button type='submit' name='rechercher' class='btn btn-primary' value='");//ajout du bouton de recherche 
              echo $donnees['animal_id'];//recuperation de l'id de l'animal dans le bouton de recherche correspondant
              echo  ("'><i class='fa fa-undo'></i></button></form></center>");
              echo ("</td><td class='cell'><center>");
              echo ("<form action='my_account?my_Animaux' method='post' enctype='multipart/form-data'><button type='submit' name='sonner' class='btn btn-primary' value='");
              echo $donnees['animal_id'];//recuperation de l'id de l'animal dans le bouton correspondant
              echo  ("'><i class='fa fa-bell'></i></button>");
              echo ("<button type='submit' name='finsonner' class='btn btn-primary' value='");
              echo $donnees['animal_id'];//recuperation de l'id de l'animal dans le bouton correspondant
              echo  ("'><i class='fa fa-bell-slash'></i></button></form></center>");
              echo ("</td><td class='cell'><center>");
              echo ("<form action='my_account?my_Animaux' method='post' enctype='multipart/form-data'><button type='submit' name='supprimer' class='btn btn-primary' value='");
              echo $donnees['animal_id'];//recuperation de l'id de l'animal dans le bouton de suppersion correspondant
              echo  ("'><i class='fa fa-trash'></i></button></form></center>");
              echo ("</td></tr>");
            }
         }
          ?>
        </tbody>
    </table>
  </center>
  <!--ecriture du formulaire d'ajout d'un animal-->
  <div class="container">
       
    <div class="col-md-8">
     
     <div class="box">
         
       <div class="box-header">
           
         <center>
             
             <h2> Ajouter un animal </h2>
             
         </center>
           
         <form action="my_account?my_Animaux" method="post" enctype="multipart/form-data">
             
           <div class="form-group">
               
               <label>Son nom</label>
               
               <input type="text" class="form-control" name="c_nom" required>
               
           </div>
           
           <div class="form-group">
               
               <label>Son age</label>
               
               <input type="text" class="form-control" name="c_age" required>
               
           </div>
           
           <div class="form-group">
               
               <label>Sa taille</label>
               
               <input type="text" class="form-control" name="c_taille" required>
               
           </div>
           
           <div class="form-group">
               
               <label>Son espèce</label>
               
               <input type="text" class="form-control" name="c_espece" required>
               
           </div>
           
           <div class="form-group">
               
               <label>Id Traceur</label>
               
               <input type="text" class="form-control" name="c_IdTraceur" required>
               
           </div>
           
           <div class="text-center">
               
               <button type="submit" name="ajouter" class="btn btn-primary">
               
               <i class="fa fa-user-md"></i> Ajouter<!--bouton d'ajout d'un animal -->
               
               </button>
               
           </div>
         </form>
           
       </div>
         
     </div>
     
    </div>
       
  </div>
  
    
  <script src="js/jquery-331.min.js"></script><!--java script pour l'ajout de bouton et changement de couleur-->
  <script src="js/bootstrap-337.min.js"></script>
    
</body>

</html>

</center>