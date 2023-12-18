<?php
	defined('BASEPATH') or exit('No se permite acceso directo');
	
	class HomeModel extends Model
	{
		//Inicia conexiÃ³n DB
		public function __construct()
		{
			parent::__construct();
		}
		
		//Obtiene el usuario de la DB por ID
		public function getUser($id)
		{
			return $this->db->query("Select * from cliente where idUsuario=$id")->fetch_array(MYSQLI_ASSOC);
		}
	}
?>