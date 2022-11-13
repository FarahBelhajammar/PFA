<?php
$controller= "Client" ;
require_once ("{$ROOT}{$DS}model{$DS}ModelClient.php");
if(isset($_REQUEST['action']))
$action = $_REQUEST['action'];
else $action="LogIn";

switch ($action) { 

case "LogIn":

$pagetitle ="Connexion Client"; 
$view ="LogIn";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;

case "LogedIn" :

if(isset($_REQUEST['username']) && 
isset($_REQUEST['password']));
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$log=ModelClient::login($username, $password);

$pagetitle = "Connexion Client"; 
$view = "LogedIn";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;

case "Register":
$pagetitle="créer un nouveau compte";
$view="CreerCompte";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;

case "Registred" :
if(isset($_REQUEST['NCIN'])&&
isset($_REQUEST['Client_firstname']) && 
isset($_REQUEST['Client_lastname']) &&
isset($_REQUEST['Client_Adresse']) &&
isset($_REQUEST['Email']) &&
isset($_REQUEST['Tel']) &&
isset($_REQUEST['Login']) &&
isset($_REQUEST['PWD'])){ 
$Client_ID = $_REQUEST["NCIN"];
$Client_firstname = $_REQUEST["Client_firstname"];
$Client_lastname = $_REQUEST["Client_lastname"];
$Client_Adresse = $_REQUEST["Client_Adresse"];
$Email = $_REQUEST["Email"];
$Tel = $_REQUEST["Tel"];
$Login = $_REQUEST["Login"];
$PWD = $_REQUEST["PWD"];
$recherche = ModelClient::select($Client_ID);
if($recherche==null){
$u = new ModelClient($Client_ID,$Client_firstname, $Client_lastname, $Client_Adresse,$Email,$Tel,$Login,$PWD);
$tab = array(
"Client_ID" => $Client_ID,
"Client_firstname" => $Client_firstname,
"Client_lastname" => $Client_lastname,
"Client_Adresse" => $Client_Adresse,
"Tel" => $Tel,
"Email" => $Email,
"Login" => $Login,
"PWD" => $PWD
);
$u->insert($tab);
$pagetitle = "Client Enregistré";
$view = "Registred";
require ("{$ROOT}{$DS}view{$DS}view.php");
}break;
}}
?>