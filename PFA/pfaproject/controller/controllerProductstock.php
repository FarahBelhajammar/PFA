<?php
$controller= "Productstock" ;
require_once ("{$ROOT}{$DS}model{$DS}ModelProductstock.php");
require_once ("{$ROOT}{$DS}model{$DS}ModelCommande.php");
if(isset($_REQUEST['action']))
$action = $_REQUEST['action'];
else $action="EnregistrerProduit";


switch ($action) { 
 
case "EnregistrerProduit":
$pagetitle = "Enregistrer Produit"; 
$view = "EnregistrerProduit";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;
 
 case "ProduitEnregistre" :
if(isset($_REQUEST['Product_Stock_ID'])&&
isset($_REQUEST['Product_Name']) && 
isset($_REQUEST['Product_Quantity']) &&
isset($_REQUEST['Stock_Min']) &&
isset($_REQUEST['Date_Mise_A_Jour']))
{
$Product_Stock_ID = $_REQUEST["Product_Stock_ID"];
$Product_Name = $_REQUEST["Product_Name"];
$Product_Quantity = $_REQUEST["Product_Quantity"];
$Stock_Min = $_REQUEST["Stock_Min"];
$Date_Mise_A_Jour = $_REQUEST["Date_Mise_A_Jour"];
$u = new ModelProductstock ($Product_Stock_ID,$Product_Name, $Product_Quantity, $Stock_Min,$Date_Mise_A_Jour);
$tab = array(
"Product_Stock_ID" => $Product_Stock_ID,
"Product_Name" => $Product_Name,
"Product_Quantity" => $Product_Quantity,
"Stock_Min" => $Stock_Min,
"Date_Mise_A_Jour" => $Date_Mise_A_Jour,
);
 $u->insert($tab);
$pagetitle = "Produit Enregistré";
$view = "ProduitEnregistre";
require ("{$ROOT}{$DS}view{$DS}view.php");
}break;

case "ModifierStockMin" :
$pagetitle = "Modifier Stock Min"; 
$view = "ModifierStockMin";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;

case "StockMinModifie" :

if (isset($_REQUEST['Product_Stock_ID']) &&
	isset($_REQUEST['Product_Quantity']))
{
	$Product_Stock_ID=$_REQUEST['Product_Stock_ID'];
	$Product_Quantity=$_REQUEST['Product_Quantity'];
	$Stock_Min= $Product_Quantity*0.1;
	$u = ModelProductstock::select($Product_Stock_ID);
	$tab = array(
	"Product_Stock_ID" =>$Product_Stock_ID,
	"Stock_Min" => $Stock_Min);
	$s=$u->update($tab,$Product_Stock_ID);
	
$pagetitle = "Stock Min Modifié"; 
$view = "StockMinModifie";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;}

case "RechercheProduit" :
$pagetitle = "Recherche Produit"; 
$view = "RechercheProduit";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;

case "ProduitTrouve" :
if (isset($_REQUEST['Product_Stock_ID']))
	$Product_Stock_ID=$_REQUEST['Product_Stock_ID'];
	$u = ModelProductstock::select($Product_Stock_ID);
$pagetitle = "Produit Trouvé"; 
$view = "ProduitTrouve";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;

case "VerifierDisponibilite" :
$pagetitle = "Verifier Disponibilité"; 
$view = "VerifierDisponibilite";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;

case "DisponibiliteVerifiee" :
if(isset($_REQUEST['Product_Stock_ID'])&&
isset($_REQUEST['Commande_ID'])){
	$Product_Stock_ID=$_REQUEST['Product_Stock_ID'];
	$Commande_ID=$_REQUEST['Commande_ID'];
	$Quantity="Quantity";
	$Product_Quantity="Product_Quantity";
$u = ModelProductstock::selectChamp($Product_Stock_ID,$Product_Quantity);
$n= ModelCommande::selectChamp($Commande_ID,$Quantity);
if($u >=$n)
{
$pagetitle= "Stock disponible" ;
$view= "Stock disponible";
}else 
$pagetitle = "pas de stock"; 
$view = "pas de stock";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;
}}
?>