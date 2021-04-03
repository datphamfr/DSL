<?php

//require_once dirname(__FILE__) . '../Modbus/Phpmodbus/ModbusMaster.php';

function enregistrer($id_animal)
{
	/*require_once dirname(__FILE__) .include '../Modbus/Lecture_Sonde_Temperature.php';*/
	include 'Lecture_Sonde_Temperature.php';
	$capteur1 = Lecture_Sonde_Temperature(1);
	$capteur2 = Lecture_Sonde_Temperature(2);
	$capteur3 = Lecture_Sonde_Temperature(3);
	$capteur4 = Lecture_Sonde_Temperature(4);

	$capteur1b = round(sin(round($capteur1, 2)+$id_animal)*2+3,0)*20;
	$capteur2b = round(sin(round($capteur2, 2)+$id_animal)*3+4,0)*15;
	$capteur3b = round($capteur3, 2);
	$capteur4b = round(sin(round($capteur4, 2))*3+4,0)*5;


	$base= new mysqli('localhost','root','','dsl');

	$sql = 'INSERT INTO statut (animal_id,animal_x,animal_y,animal_temp,animal_velocity,tracage_date) VALUES ("'.$id_animal.'","'.mysqli_escape_string($base, $capteur1b).'", "'.mysqli_escape_string($base, $capteur2b).'","'.mysqli_escape_string($base, $capteur3b).'","'.mysqli_escape_string($base, $capteur4b).'", NOW())';

	//$sql = 'INSERT INTO statut VALUES("", "'.mysqli_escape_string($base, $capteur1b).'", "'.mysqli_escape_string($base, $capteur2b).'", "'.mysqli_escape_string($base, $capteur3b).'", "'.mysqli_escape_string($base, $capteur4b).'", NOW())';


	mysqli_query($base, $sql, MYSQLI_STORE_RESULT) or die('Erreur SQL !!'.$sql.'<br/>'.mysqli_error($base));
}
//require_once dirname(__FILE__) . '/writeRegist.php';
//writeRegist('192.168.52.232', 502, 4,0);
//11 resistance
//enregistrer();
?>