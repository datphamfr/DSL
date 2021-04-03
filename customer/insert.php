<?PHP
	
	session_start();

	$con = @mysql_connect("localhost","root","","dsl");

	if (! $con)
	{
	die("ne pourrait pas se relier : ". mysql_error ());
	}

	mysql_select_db ("dsl", $con) ;
    $customer_email = $_SESSION['customer_email'];

	$insert_animal = " INSERT INTO animal (animal_id,animal_name,animal_age,animal_size,animal_type,animal_owner) VALUES ('$_POST[c_IdTraceur]','$_POST[c_nom]','$_POST[c_age]','$_POST[c_taille]','$_POST[c_espece]','$customer_email')";
	
	if (!mysql_query($insert_animal,$con))
	{
	die('impossible d’ajouter cet enregistrement : ' . mysql_error());
	}
	echo "L’enregistrement est ajouté ";

	mysql_close($con)
	?>
	<a href=" my_account?my_Animaux">Retour au formulaire</a>

 ?>