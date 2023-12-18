<?php
	defined('BASEPATH') or exit('No se permite acceso directo');
	
	abstract class Controller
	{
		private $view;
				
		//Inicializa la vista
		public function render($controller_name = '', $params = array())
		{
			$this->view = new View($controller_name, $params);
		}
		
		//Metodo estĂ¡ndar
		abstract public function exec();
		
	}

?>