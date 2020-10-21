<?php

	namespace Alfa;
	class Cliente implements \Beta\CadastroInterface{
		public $nome = "Jorge";

		public function __construct(){
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}

		public function __get($attr) {
			return $this->$attr;
		}

		public function salvar(){
			echo 'Salvar';
		}

		public function remover(){
			echo 'Remover';
		}
	}

	interface CadastroInterface {
		public function salvar();
	}

	namespace Beta;
	class Cliente implements \Alfa\CadastroInterface{
		public $nome = "Ana";

		public function __construct(){
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}

		public function __get($attr){
			return $this->$attr;
		}

		public function remover(){
			echo 'Remover';
		}

		public function salvar(){
			echo 'Salvar';
		}
	}

	interface CadastroInterface {
		public function remover();
	}

	$charlie = new \Alfa\Cliente();
	print_r($charlie);
	echo $charlie->__get('nome');

?>