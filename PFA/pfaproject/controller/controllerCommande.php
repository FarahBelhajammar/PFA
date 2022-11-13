<?php
$controller= "Commande" ;
require_once ("{$ROOT}{$DS}model{$DS}ModelCommande.php");
if(isset($_REQUEST['action']))
$action = $_REQUEST['action'];
else $action="PasserCommande";

switch ($action) { 

case "PasserCommande":
$pagetitle = "Passer une commande"; 
$view = "PasserCommande";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;

case "CommandePassee" :

if(isset($_REQUEST['Commande_ID']) &&
isset($_REQUEST['Product_Name']) && 
isset($_REQUEST['Quantity']) &&
isset($_REQUEST['Adresse']) &&
isset($_REQUEST['Email']) &&
isset($_REQUEST['Tel']) &&
isset($_REQUEST['Paiment_Mode']) &&
isset($_REQUEST['Date_Livraison'])&&
isset($_REQUEST['NCIN'])){ 
$Commande_ID = $_REQUEST["Commande_ID"];
$Product_Name = $_REQUEST["Product_Name"];
$Quantity = $_REQUEST["Quantity"];
$Adresse = $_REQUEST["Adresse"];
$Email = $_REQUEST["Email"];
$Tel = $_REQUEST["Tel"];
$Paiment_Mode = $_REQUEST["Paiment_Mode"];
$Date_Livraison = $_REQUEST["Date_Livraison"];
$Client_ID = $_REQUEST["NCIN"];
$u = new ModelCommande($Commande_ID,$Product_Name, $Quantity, $Adresse,$Email,$Tel,$Paiment_Mode,$Date_Livraison,$Client_ID);
$tab = array(
"Commande_ID" => $Commande_ID,
"Product_Name" => $Product_Name,
"Quantity" => $Quantity,
"Adresse" => $Adresse,
"Tel" => $Tel,
"Email" => $Email,
"Paiment_Mode" => $Paiment_Mode,
"Date_Livraison" => $Date_Livraison,
"Client_ID" => $Client_ID
);
$u->insert($tab);
$pagetitle = "Commande Enregistrée";
$view = "CommandePassee";
require ("{$ROOT}{$DS}view{$DS}view.php");
}break;

case "ConsulterCommande" :

if (isset($_REQUEST['Commande_ID'])){
$Commande_ID = $_REQUEST["Commande_ID"];
$u = ModelCommande::select($Commande_ID);
$pagetitle=" Consulter Commande ";
$view=" ConsulterCommande ";
require ("{$ROOT}{$DS}view{$DS}view.php");}
break;

case"ConsulterHistoriqueAchat":

if (isset($_REQUEST['Client_ID'])){
$Client_ID = $_REQUEST["Client_ID"];
$u = ModelCommande::selectF($Client_ID);

$pagetitle="Consulter Historique  Achat";
$view=" ConsulterHistoriqueAchat";
require ("{$ROOT}{$DS}view{$DS}view.php");}
break;

/*
case " ValiderCommande ":
$pagetitle="  Commande validée ";
$view=" CommandeValidée";
require ("{$ROOT}{$DS}view{$DS}view.php");}
break;

case " RefuserCommande" :
$pagetitle="  Commande refusée ";
$view=" CommandeRefusée";
require ("{$ROOT}{$DS}view{$DS}view.php");}
break;
}*/
}
?>




