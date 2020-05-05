<?php
  class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;dbname=website', 'root', '');
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
  }
  /*class Database
{  
   
   public function connexion()
  {
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="website";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    return $conn;
  }*/

?>