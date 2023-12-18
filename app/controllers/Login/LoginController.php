<?php
	defined('BASEPATH') or exit('No se permite acceso directo');
	require_once ROOT.'/mainproject/app/models/Login/LoginModel.php';
	require_once LIBS_ROUTE .'Session.php';
	class LoginController extends Controller
	{
		private $model;
		private $session;
		
		public function __construct()
		{
			$this->model = new LoginModel();
			$this->session= new Session();
		}
		
		public function exec()
		{
			
			$this->render(__CLASS__);
		}
		
		public function signin($request_params)
		{
			if($this->verify($request_params))
			{
				return $this->renderErrorMessage('El email y password son obligatorios');
			}	
			$result=$this->model->signin($request_params['email']);
			if(!$result->num_rows)
			{
				return $this->renderErrorMessage("El email: {$request_params['email']} no fue encontrado");
			}
			$result = $result->fetch_object();
			if(!password_verify($request_params['password'], $result->Password))
			{
				return $this->renderErrorMessage('La contraseĂ±a es incorrecta');
			}
			
			//Iniciamos variables de sesion
			$this->session->init();
			$this->session->add('email', $result->correo);
			$this->session->add('user', $result->Usuario);
			$this->session->add('idrol', $result->IdRol);
			header('location: /mainproject/main');
			
		}
	
		private function verify($request_params)
		{
			return empty($request_params['email']) or empty($request_params['password']);
		}
		
		private function renderErrorMessage($message)
		{
			$params=array('error_message'=> $message);
			$this->render(__CLASS__, $params);
		}
		
		
	}
?>