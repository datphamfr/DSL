<?php
include'/Phpmodbus/ModbusMaster.php';
function writeRegist($ip,$port,$adr,$value)
{
	
	$modbus=new ModbusMaster($ip,"TCP",$port);
	$data =array($value);
	$datatype =array("WORD");
	$modbus->writeMultipleRegister(0,$adr,$data,$datatype);
}
?>