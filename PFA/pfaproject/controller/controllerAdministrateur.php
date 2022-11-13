<?php
$controller ="Administrateur" ;
require_once ("{$ROOT}{$DS}model{$DS}ModelAdministrateur.php");
if(isset($_REQUEST['action']))
$action =$_REQUEST['action'];
else $action="LogIn";


switch ($action) { 

case "LogIn" :
$pagetitle ="Connexion Admin"; 
$view ="LogIn";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;


case "LogedIn" :

if(isset($_REQUEST['username']) && 
isset($_REQUEST['password']));
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$log=ModelAdministrateur::login($username,$password);
$pagetitle = "Connexion Admin";
$view = "LogedIn";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;

case "Register" :

$pagetitle="creer un nouveau compte";
$view="Register" ;
require ("{$ROOT}{$DS}view{$DS}view.php");
break;

case "Registred" :

if(isset($_REQUEST['NCIN'])&&
isset($_REQUEST['Admin_firstname']) && 
isset($_REQUEST['Admin_lastname']) &&
isset($_REQUEST['Fonction']) &&
isset($_REQUEST['Salary']) &&
isset($_REQUEST['Admin_Hire_Date']) &&
isset($_REQUEST['Login']) &&
isset($_REQUEST['PWD'])){ 
$Admin_ID = $_REQUEST["NCIN"];
$Admin_firstname = $_REQUEST["Admin_firstname"];
$Admin_lastname = $_REQUEST["Admin_lastname"];
$Fonction = $_REQUEST["Fonction"];
$Salary = $_REQUEST["Salary"];
$Admin_Hire_Date = $_REQUEST["Admin_Hire_Date"];
$Login = $_REQUEST["Login"];
$PWD = $_REQUEST["PWD"];
$recherche = ModelAdministrateur::select($Admin_ID);
if($recherche==null){
$u = new ModelAdministrateur($Admin_ID,$Admin_firstname, $Admin_lastname, $Fonction,$Salary,$Admin_Hire_Date,$Login,$PWD);
$tab = array(
"Admin_ID" => $Admin_ID,
"Admin_firstname" => $Admin_firstname,
"Admin_lastname" => $Admin_lastname,
"Fonction" => $Fonction,
"Salary" => $Salary,
"Admin_Hire_Date" => $Admin_Hire_Date,
"Login" => $Login,
"PWD" => $PWD
);
$u->insert($tab);
$pagetitle = "Admin Enregistré";
$view = "Registred";
require ("{$ROOT}{$DS}view{$DS}view.php");
}break;
}}
?>