<?php
require_once ("Model.php");
Class ModelProducttest extends Model{ 
private $Product_Test_ID;
private $Product_Name;
private $Date_Test;
private $Medcin_Responsable_Name;
private $Resultat;
protected static $table = 'product_test'; 
protected static $primary = 'Product_Test_ID';

function __construct($Product_Test_ID=NULL,$Product_Name=NULL,$Date_Test=NULL,$Medcin_Responsable_Name=NULL,$Resultat=NULL){
$this->Product_Test_ID=$Product_Test_ID;
$this->Product_Name=$Product_Name;
$this->Date_Test=$Date_Test;
$this->Medcin_Responsable_Name=$Medcin_Responsable_Name;
$this->Resultat=$Resultat;
}

public function getProduct_Test_ID() {
	return $this->Product_Test_ID;
}

public function getProduct_Name() {
	return $this->Product_Name;
}

public function getDate_Test() {
	return $this->Date_Test;
}

public function getMedcin_Responsable_Name() {
	return $this->Medcin_Responsable_Name;
}

public function getResultat() {
	return $this->Resultat;
}

public function setProduct_Name($Product_Name) {
   $this->Product_Name=$Product_Name;
}

public function setDate_Test($Date_Test){
   $this->Date_Test=$Date_Test;
}

public function setMedcin_Responsable_Name($Medcin_Responsable_Name){
  $this->Medcin_Responsable_Name=$Medcin_Responsable_Name;
}

public function setResultat($Resultat){
 $this->Resultat=$Resultat;
}
}
?>