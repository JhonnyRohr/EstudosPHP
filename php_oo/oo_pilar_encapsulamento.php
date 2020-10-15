<?php
	class Pai{
		private $nome = 'João';
		protected $sobrenome = 'Silva';
		public $humor = 'Feliz' ;

		public function getNome(){
			return $this->nome;
		}

		//Uma forma de acessar um atributo private e seguir uma regra de negócios 
		public function setNome($value){
			if(strlen($value) >= 3){
				$this->nome = $value;
			}
		}

		public function getSobrenome(){
			return $this->sobrenome;
		}

		//Uma forma de acessar um atributo protected e seguir uma regra de negócios 
		public function setSobrenome($value){
			if(strlen($value) >= 3){
				$this->sobrenome = $value;
			}
		}
	}

	$pai = new Pai();
	echo $pai->getNome();
	$pai->setNome('Pedro');
	echo '<br />';
	echo $pai->getNome();

	echo '<br /><hr />';

	echo $pai->getSobrenome();
	$pai->setSobrenome('Pereira');
	echo '<br />';
	echo $pai->getSobrenome();


?>