<?php
defined('BASEPATH') or exit('No se permite acceso directo');
/////////////////
//Modelo base
/////////////////
class Model
{
  // Se crea una variable para asignar la conexion a la base de datos
  protected $db;

  //Inicializa conexion
  public function __construct()
  {
    //$this->db = new Mysqli(HOST, USER, PASSWORD, DB_NAME);
  }

  //Finaliza conexion
  public function __destruct()
  {
    //$this->db->close();
  }
}
?>