<?php
$controller= "Producttest" ;
require_once ("{$ROOT}{$DS}model{$DS}ModelProducttest.php");
if(isset($_REQUEST['action']))
$action = $_REQUEST['action'];
else $action="ChercherProduitTest";

switch ($action) { 
 case "ChercherProduitTest" :
$pagetitle = "RechercherProduitTest"; 
$view = "RechercherProduitTest";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;

case "ResultatRecherche " :
if (isset($_REQUEST['Product_Test_ID']))
	$u = ModelProducttest::select($Product_Test_ID);
$pagetitle = "Resultat Recherche Produit "; 
$view = "ResultatRecherche";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;
}
?>