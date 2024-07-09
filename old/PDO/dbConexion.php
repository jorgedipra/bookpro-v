<?php
 abstract class Conexion{
 
   protected $manejador='mysql';
   private static $servidor = 'localhost';
   private static $usurario = 'root';
   private static $clave = '123456';
   private static $nomdb ='Meid';
   protected $cnx;
   protected function getConexion()
   {
       try {
           $this->cnx=new PDO($this->manejador.":host".self::$servidor.";dbname".$this->nomdb,  self::$usurario,self::$clave,  array(PDO::ATTR_PERSISTENT=>true));
           return ($this->cnx);
           
       } catch (PDOException $exc) {
           echo "Conexion Error".$exc->getMessage();
       }
      }
 }
?>
