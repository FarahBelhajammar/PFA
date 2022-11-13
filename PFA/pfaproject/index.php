<?php
$ROOT =__DIR__ ;
$DS =DIRECTORY_SEPARATOR ;
$controleur_default = "Client" ;
if(!isset($_REQUEST['controller']))
$controller=$controleur_default ;
else 
$controller =$_REQUEST['controller'];

switch ($controller) {
	
case "Administrateur" :
require("{$ROOT}{$DS}controller{$DS}controllerAdministrateur.php");
break;
case "Client" : 
require("{$ROOT}{$DS}controller{$DS}controllerClient.php");
break;
case "Responsablestock" : 
require ("{$ROOT}{$DS}controller{$DS}controllerResponsablestock.php");
break;
case "Productstock" : 
require ("{$ROOT}{$DS}controller{$DS}controllerProductstock.php");
break;
case "Producttest" : 
require ("{$ROOT}{$DS}controller{$DS}controllerProducttest.php");
break;
case "Commande" : 
require ("{$ROOT}{$DS}controller{$DS}controllerCommande.php");
break;
case "default" :
require ("{$ROOT}{$DS}controller{$DS}controllerClient.php");
break;
}
?>