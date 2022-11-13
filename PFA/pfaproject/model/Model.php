<?php
require_once ("{$ROOT}{$DS}config{$DS}conf.php"); 
class Model{
private static $pdo;
public static function Init(){
$host =Conf::getHostname();
$dbname =Conf::getDatabase();
$logIn = Conf::getLogIn();
$pass = Conf::getPassword();
try{
self::$pdo= new PDO("mysql:host=$host;dbname=$dbname",$logIn,$pass);
} 
catch(PDOException $e) {
die ($e->getMessage()); 
}
}

	 public function getAll(){
                $SQL="SELECT * FROM ".static::$table;
                $rep = self::$pdo->query($SQL);
                $rep->setFetchMode(PDO::FETCH_CLASS, 'Model'. ucfirst( static::$table));
            return $rep->fetchAll();
}

          function select($cle_primaire) {
                $sql = "SELECT * from ".static::$table." WHERE ".static::$primary."=:cle_primaire";
                $req_prep = self::$pdo->prepare($sql);
                $req_prep->bindParam(":cle_primaire", $cle_primaire);
                $req_prep->execute();
                $req_prep->setFetchMode(PDO::FETCH_CLASS,'Model'. ucfirst( static::$table));
           if ($req_prep->rowCount()==0){
                           return null;
						         }
               else{
                     $rslt = $req_prep->fetch();
                return $rslt; }
 }
 
  function selectF($cle_etranger) {
                $sql = "SELECT * from ".static::$table." WHERE ".static::$foreign."=:cle_etranger";
                $req_prep = self::$pdo->prepare($sql);
                $req_prep->bindParam(":cle_etranger", $cle_etranger);
                $req_prep->execute();
                $req_prep->setFetchMode(PDO::FETCH_CLASS,'Model'. ucfirst( static::$table));
           if ($req_prep->rowCount()==0){
                           return null;
						         }
               else{
                     $rslt = $req_prep->fetch();
                return $rslt; }
 }
 
 
 
 
    function selectChamp($cle_primaire,$champ) {
                $sql = "SELECT".static::$champ ."from ".static::$table." WHERE ".static::$primary."=:cle_primaire";
                $req_prep = self::$pdo->prepare($sql);
                $req_prep->bindParam(":cle_primaire", $cle_primaire);
				$req_prep->bindParam(":champ", $champ);
                $req_prep->execute();
                $req_prep->setFetchMode(PDO::FETCH_CLASS,'Model'. ucfirst( static::$table));
           if ($req_prep->rowCount()==0){
                           return null;
						         }
               else{
                     $rslt = $req_prep->fetch();
	  return $rslt; }
	  } 
	  
public function insert($tab){
 $sql = "INSERT INTO ".static::$table." VALUES(";
 foreach ($tab as $cle => $valeur){
		$sql .=" :".$cle.",";}
$sql=rtrim($sql,",");
$sql.=");";
$req_prep =Model::$pdo->prepare($sql);
$values = array();
    foreach ($tab as $cle => $valeur)
      		$values[":".$cle] = $valeur;
	$req_prep->execute($values);
  }
	
	
public function update($tab, $cle_primaire) {
$sql = "UPDATE ".static::$table." SET";
foreach ($tab as $cle => $valeur){
$sql .=" ".$cle."=:new".$cle.",";
		}
$sql=rtrim($sql,",");
$sql.=" WHERE ".static::$primary."=:oldid;";
		
$req_prep = Model::$pdo->prepare($sql);
$values = array();
	  
foreach ($tab as $cle => $valeur){
	  $values[":new".$cle] = $valeur;
		  }

		  $values[":oldid"] = $cle_primaire;
		  $req_prep->execute($values);
		  $obj = Model::select($tab[static::$primary]);
		  return $obj;
  }
	

 public static function login($username, $password) {
	$sql = "SELECT * from ".static::$table." WHERE ".static::$Login."=:username AND ".static::$PWD."=:password";
	$req_prep = Model::$pdo->prepare($sql);
	$req_prep->bindParam(":username", $username);
	$req_prep->bindParam(":password", $password);
	$req_prep->execute();
	$req_prep->setFetchMode(PDO::FETCH_CLASS,'Model'.ucfirst(static::$table));
	if ($req_prep->rowCount()==0){
		return null;
		die();
	  }else{
		$rslt = $req_prep;
		return $rslt;
	}
	  
}}Model::init();
?>
	

