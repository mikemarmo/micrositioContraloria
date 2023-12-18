<?php
	defined('BASEPATH') or exit('No se permite acceso directo');
	
	class View
	{
		protected $template; //string
		protected $controller_name; //string
		protected $params; //arreglo
		//Inicializa valores y el render
		function __construct($controller_name, $params=array())
		{
			$this->controller_name = $controller_name;
			$this->params = $params;
			$this->render();
		}
		
		//Muestra la vista según el controlador que hizo la petición
		protected function render()
		{
			if (class_exists($this->controller_name))
			{
			$file_name = str_replace('Controller', '', $this->controller_name);
			$this->template = $this->getContentTemplate($file_name);
			echo $this->template;
			} else
			{
				throw new Exception("No existe {$this->controller_name}");				
			}
			
		}
		
		//Retorna el render de una vista
		protected function getContentTemplate($file_name)
		{
			$file_path = ROOT . '/' . PATH_VIEWS . "$file_name/$file_name" . '.php';
			//error_log("$file_path");
			//echo '<script>console.log("hooolaaaaa");<script>';
			//echo $file_path;
			if(is_file($file_path))
			{
				extract($this->params);
				ob_start();
				require($file_path);
				$template = ob_get_contents();
				ob_end_clean();
				return $template;
			} else 
			{
				throw new Exception("Error. No existe $file_path");
			}
		}
	}
?>