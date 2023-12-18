<?php
	defined('BASEPATH') or exit('No se permite acceso directo');
	
	require_once ROOT.'/micrositioContraloria/app/models/Home/HomeModel.php';
	class HomeController extends Controller
	{
		public $nombre; //string
		public $model; //objeto
		
		//Inicializa valores 
		public function __construct()
		{
			$this->model=new HomeModel();

			$this->nombre = 'Mundo';
		}
		
		//Método estándar
		public function exec()
		{  
			//$this->show();
			$this->render(__CLASS__);
		}
		
		//Método de ejemplo
		public function register()
		{
			header('location: /mainproject/main');
		}
		
		//Método de ejemplo
		public function show()
		{
			$params = array('nombre' => $this->nombre);
			$this->render(__CLASS__, $params);
		}
		
		//Método de ejemplo con model. Obtiene un usuario segun ID
		public function usuario($id)
		{	
			$res = $this->model->getUser($param); //devuelve un arreglo
			$this->nombre = $res['name']; //devuelve el campo name de la tabla consultada
			$this->show();
		}		
	}
?>