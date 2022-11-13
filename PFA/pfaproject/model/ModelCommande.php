<?php
require_once ("Model.php");
Class ModelCommande extends Model{ 
   private $Commande_ID; 
   private $Product_Name; 
   private $Quantity;
   private $Adresse;
   private $Email;
   private $Tel;
   private $Paiment_Mode;
   private $Date_Livraison;
   private $Client_ID;
   
   protected static $table = 'commande'; 
   protected static $primary = 'Commande_ID';
   protected static $foreign = 'Client_ID';
   
   public function __construct($Commande_ID,$Product_Name,$Quantity,$Adresse,$Email,$Tel,$Paiment_Mode,$Date_Livraison,$Client_ID) {
	$this->Commande_ID=$Commande_ID;
    $this->Product_Name=$Product_Name;
    $this->Quantity=$Quantity;
	$this->Adresse=$Adresse;
	$this->Email=$Email;
	$this->Tel=$Tel;
	$this->Paiment_Mode=$Paiment_Mode;
	$this->Date_Livraison=$Date_Livraison;
	$this->Client_ID=$Client_ID;
} 
   
      public function getCommande_ID(){
		  return $this->Commande_ID;
	 
 } 
     public function getProduct_Name(){
		  return $this->Product_Name;
	 
 }  
    public function getQuantity(){
		  return $this->Quantity;
	 
 } 
    public function getAdresse(){
		  return $this->Adresse;
	 
 } 
   public function getEmail(){
		  return $this->Email;
	 
 } 
   public function getTel(){
		  return $this->Tel;
	 
 } 
   public function getPaiment_Mode(){
		  return $this->Paiment_Mode;
	 
 } 
    public function getDate_Livraison(){
		  return $this->Date_Livraison;
	 
 } 
    public function getClient_ID(){
		  return $this->Client_ID;
	 
 }   
 //les setters
  public function setProduct_Name($Product_Name) {

            $this->Product_Name = $Product_Name;
} 
      public function setQuantity($Quantity) {

            $this->Quantity = $Quantity;
}
      public function setAdresse($Adresse) {

            $this->Adresse = $Adresse;
}
      public function setEmail($Email) {

            $this->Email = $Email;
}
   public function setTel($Tel) {

            $this->Tel = $Tel;
}
 public function setPaiment_Mode($Paiment_Mode) {

            $this->Paiment_Mode = $Paiment_Mode;
}
public function setDate_Livraison($Date_Livraison) {

            $this->Date_Livraison = $Date_Livraison;
}}
?>