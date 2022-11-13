<?php 
class Conf { 
static private $debug = True; 
static private $databases = array('hostname'=>'localhost','database'=>'pharmacie_centrale','logIn'=>'root','password'=>''); 
static public function getLogIn() { 
return self::$databases['logIn']; } 
static public function getHostname(){
return self::$databases['hostname']; } 
static public function getDatabase(){
return self::$databases['database']; } 
static public function getPassword(){
return self::$databases['password']; } 
static public function getDebug() { 
return self::$debug; }
}?>