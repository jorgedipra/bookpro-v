<?php

require_once 'dbConexion.php';

 
class operacionesBasicas extends Conexion
{   
  public static $sql;
function operacionesSelect($consulta)
    {
    try {
        $this->getConexion();
        self::$sql=$consulta;
        $resultado= $this->cnx->query($sql)or die($sql);
         return $resultado;
    }catch (PDOException $exc) {
           echo "Conexion Error".$exc->getMessage();
       }
    }
  function operaCionesDml($consulta)
    {
         try {
        $this->getConexion();
        self::$sql=$consulta;
        $resultado= $this->cnx->query($sql)or die($sql);
        if($resultado)
            {
             echo "registrado con satisfacion";
            }
    }catch (PDOException $exc) {
           echo "Conexion Error".$exc->getMessage();
       }
    }
    
 
}
  
?>
