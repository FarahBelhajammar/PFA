<?php
require_once ("Model.php");
Class ModelClient extends Model{ 
   private $Client_ID; 
   private $Client_firstname; 
   private $Client_lastname;
   private $Client_Adresse;
   private $Email;
   private $Tel;
   private $Login;
   private $PWD;
   protected static $table = 'client'; 
   protected static $primary = 'Client_ID';
   
   
   public function __construct($Client_ID,$Client_firstname,$Client_lastname,$Client_Adresse,$Email,$Tel,$Login,$PWD) {
	$this->Client_ID=$Client_ID;
    $this->Client_firstname=$Client_firstname;
    $this->Client_lastname=$Client_lastname;
	$this->Client_Adresse=$Client_Adresse;
	$this->Email=$Email;
	$this->Tel=$Tel;
	$this->Login=$Login;
	$this->PWD=$PWD;
} 
//les getters
   
      public function getClient_ID(){
		  return $this->Client_ID;
	 
 } 
     public function getClient_firstname(){
		  return $this->Client_firstname;
	 
 }  
    public function getClient_lastname(){
		  return $this->Client_lastname;
	 
 } 
    public function getClient_Adresse(){
		  return $this->Client_Adresse;
	 
 } 
   public function getEmail(){
		  return $this->Email;
	 
 } 
   public function getTel(){
		  return $this->Tel;
	 
 } 
   public function getLogin(){
		  return $this->Login;
	 
 } 
    public function getPwd(){
		  return $this->PWD;
	 
 }  
 //les setters
  public function setClient_firstname($Client_firstname) {

            $this->Client_firstname = $Client_firstname;
} 
      public function setClient_lastname($Client_lastname) {

            $this->Client_lastname = $Client_lastname;
}
      public function setClient_Adresse($Client_Adresse) {

            $this->Client_Adresse = $Client_Adresse;
}
      public function setEmail($Email) {

            $this->Email = $Email;
}
   public function setTel($Tel) {

            $this->Tel = $Tel;
}
 public function setLogin($Login) {

            $this->Login = $Login;
}
public function setPWD($PWD) {

            $this->PWD = $PWD;
}}
?>