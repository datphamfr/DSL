<?php

/*require_once dirname(__FILE__) . */include'../Modbus/Phpmodbus/ModbusMaster.php';


function readRegist	($ip, $port, $nregist, $adr){
	try
	{
		
		$modbus = new ModbusMaster($ip, "TCP", $port);
		$recdata = $modbus->readMultipleRegisters(1, $adr, $nregist);
		$val16bits = $recdata[0]*256+$recdata[1]; //calcul de la valeur du mot

		return $val16bits;
	}
	catch(Exception $e)
	{
		if($nregist==61)
		{
			return 2;
		}
		if($nregist==59)
		{
			return 2;
		}
		else
		{
			echo "Aucune sonde de temperature n'est detectee<br/>";
		}
	}
}

function Lecture_Sonde_Temperature($numerosonde)
{
	// on gère les erreurs grâce au try catch
	//include 'readRegist.php';
	try
	{
		$valeursonde = (readRegist("192.168.52.232", 502, 1, (15+$numerosonde)))/10;
		return $valeursonde;
	}

	catch(Exception $e)
	{
		echo "Probleme de lecture de la temperature pour enregistrer<br/>";
	}
}

?>