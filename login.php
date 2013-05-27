<?php

include('lib/nusoap.php');

$r = $_POST["rut"];
$digito = $_POST["guion"];
$rut = "$r-$digito";
        
$password = $_POST["password"];

$password = strtoupper($password);
$password = hash("SHA256", $password);

$parametros = array();
$parametros["rut"] = $rut;
$parametros["password"] = $password;

$objClienteSOAP = new soapclient("http://informatica.utem.cl:8011/dirdoc-auth/ws/auth?wsdl");
$objRespuesta = $objClienteSOAP->autenticar($parametros);

//var_dump($objRespuesta);

$codigo =  $objRespuesta->return->codigo;
$descripcion =  $objRespuesta->return->descripcion;

if ($codigo == 1) 
	echo "Datos Correctos ";
 else 
	echo "Datos erroneos";
?>