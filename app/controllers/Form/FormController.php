<?php
defined('BASEPATH') or exit('No se permite acceso directo');
//require_once ROOT . PATH_MODELS . 'Login/MainModel.php';
require_once LIBS_ROUTE .'Session.php';

class FormController extends Controller
{
	private $variable1="Formulario";
	private $variable2;
	
	public function exec()
	{
		$params = array('nombre' => $this->variable1);
		$this->render(__CLASS__, $params);
	}

}

?>