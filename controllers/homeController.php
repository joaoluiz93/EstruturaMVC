<?php
class homeController extends Controller{
	
	

	public function index(){

		$usuario = new Login();
		$dados['login'] = $usuario->getLogin();


		$this->loadTemplate('home', $dados);

	
	}

	public function sobre(){
		$dados = array();
		$this->loadTemplate('sobre',$dados);
	}

}

