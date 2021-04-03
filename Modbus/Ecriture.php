<?php
include 'writeRegist.php';
function Sonner()
{
//Ecriture ventillo
	writeRegist('192.168.52.232', 502, 4,1);
}
function FinSonner()
{
	writeRegist('192.168.52.232', 502, 4,0);
}
function analyser()
{
	writeRegist('192.168.52.232', 502, 11,1);
}
function Finanalyser()
{
	writeRegist('192.168.52.232', 502, 11,0);
}

?>