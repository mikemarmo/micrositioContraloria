<?php
defined('BASEPATH') or exit('No se permite acceso directo');

require_once ROOT . PATH_MODELS . 'Login/LoginModel.php';
require_once LIBS_ROUTE .'Session.php';

/**
* Main controller
*/
class MainController extends Controller
{
  private $session;
  private $loginModel;
  
  public function __construct()
  {
    $this->session = new Session();
    $this->session->init();
	//var_dump($this->session->getAll());
    if($this->session->getStatus() === 1 || empty($this->session->get('email')))
      exit('Acceso denegado');
	$this->loginModel = new LoginModel();
  }

  public function exec()
  {
	$params = array('electronico' => $this->session->get('email'), 'usuario' => $this->session->get('user'), 'rol' => $this->session->get('idrol'));
	$this->render(__CLASS__, $params);
  }

  public function logout()
  {
    $this->session->close();
    header('location: /mainproject/login');
  }

}
