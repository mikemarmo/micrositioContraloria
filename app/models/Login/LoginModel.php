<?php
	defined('BASEPATH') or exit('No se permite acceso directo');
	//require_once ROOT.'/mainproject/app/models/Login/LoginModel.php';
	class LoginModel extends Model
	{
		private $model;
		public function __construct()
		{
			parent::__construct();
		}
		
		public function signIn($email)
		{
			$email = $this->db->real_escape_string($email); // db es la instancia de la clase real_escape_string evitar inyecciones SQL
			
			$sql = "SELECT * FROM usuario WHERE correo = '{$email}'";
			$result=$this->db->query($sql);
			return $result;
		}
	}
?>