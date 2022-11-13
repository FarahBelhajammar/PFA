<?php
require_once ("Model.php");
Class ModelProductstock extends Model{ 
private $Product_Stock_ID;
private $Product_Name;
private $Product_Quantity;
private $Stock_Min;
private $Date_Mise_A_Jour;
protected static $table = 'product_stock'; 
protected static $primary = 'Product_Stock_ID';

function __construct($Product_Stock_ID=NULL,$Product_Name=NULL,$Product_Quantity=NULL,$Stock_Min=NULL,$Date_Mise_A_Jour=NULL){
$this->Product_Stock_ID=$Product_Stock_ID;
$this->Product_Name=$Product_Name;
$this->Product_Quantity=$Product_Quantity;
$this->Stock_Min=$Stock_Min;
$this->Date_Mise_A_Jour=$Date_Mise_A_Jour;
}

public function getProduct_Stock_ID() {
	return $this->Product_Stock_ID;
}

public function getProduct_Name() {
	return $this->Product_Name;
}

public function getProduct_Quantity() {
	return $this->Product_Quantity;
}

public function getStock_Min() {
	return $this->Stock_Min;
}

public function getDate_Mise_A_Jour() {
	return $this->Date_Mise_A_Jour;
}

public function setProduct_Name($Product_Name) {
   $this->Product_Name=$Product_Name;
}

public function setProduct_Quantity($Product_Quantity){
   $this->Product_Quantity=$Product_Quantity;
}

public function setStock_Min($Stock_Min){
  $this->Stock_Min=$Stock_Min;
}

public function setDate_Mise_A_Jour($Date_Mise_A_Jour){
 $this->Date_Mise_A_Jour=$Date_Mise_A_Jour;
}}
?>