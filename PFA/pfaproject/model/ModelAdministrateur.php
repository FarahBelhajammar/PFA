<?php
require_once ("Model.php");
Class ModelAdministrateur extends Model{ 
   private $Admin_ID; 
   private $Admin_firstname; 
   private $Admin_lastname;
   private $Fonction;
   private $Salary;
   private $Admin_Hire_Date;
   private $Login;
   private $PWD;
   protected static $table ='administrateur'; 
   protected static $primary ='Admin_ID';
   
   
   public function __construct($Admin_ID,$Admin_firstname,$Admin_lastname,$Fonction,$Salary,$Admin_Hire_Date,$Login,$PWD) {
	$this->Admin_ID=$Admin_ID;
    $this->Admin_firstname=$Admin_firstname;
    $this->Admin_lastname=$Admin_lastname;
	$this->Fonction=$Fonction;
	$this->Salary=$Salary;
	$this->Admin_Hire_Date=$Admin_Hire_Date;
	$this->Login=$Login;
	$this->PWD=$PWD;
} 
   
      public function getAdmin_ID(){
		  return $this->Admin_ID;
	 
 } 
     public function getAdmin_firstname(){
		  return $this->Admin_firstname;
	 
 }  
    public function getAdmin_lastname(){
		  return $this->Admin_lastname;
	 
 } 
    public function getFonction(){
		  return $this->Fonction;
	 
 } 
   public function getSalary(){
		  return $this->Salary;
	 
 } 
   public function getAdmin_Hire_Date(){
		  return $this->Admin_Hire_Date;
	 
 } 
   public function getLogin(){
		  return $this->Login;
	 
 } 
    public function getPwd(){
		  return $this->PWD;
	 
 } 
        public function setAdmin_firstname($Admin_firstname) {

            $this->Admin_firstname = $Admin_firstname;
} 
      public function setAdmin_lastname($Admin_lastname) {

            $this->Admin_lastname = $Admin_lastname;
}
      public function setFonction($Fonction) {

            $this->Fonction = $Fonction;
}
      public function setSalary($Salary) {

            $this->Salary = $Salary;
}
 public function setLogin($Login) {

            $this->Login = $Login;
}
public function setPWD($PWD) {

            $this->PWD = $PWD;
}
}
?>