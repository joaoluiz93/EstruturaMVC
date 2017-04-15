<?php
class postsController extends Controller{
	
	public function index(){

		echo "Lista das postagens";
	}

	public function ver($nome, $sobrenome){

		echo "Nome: ".$nome." ".$sobrenome;
	}
}