<?php
function Sonner()
{
//Ecriture ventillo
	include 'writeRegist.php';$
	writeRegist('192.168.52.232', 502, 4,1);

}

function FinSonner()
{
	include 'writeRegist.php';
	writeRegist('192.168.52.232', 502, 4,0);
}

function analyser()
{
	include 'writeRegist.php';
	writeRegist('192.168.52.232', 502, 11,1);
}

function Finanalyser()
{
	include 'writeRegist.php';
	writeRegist('192.168.52.232', 502, 11,0);
}

?>