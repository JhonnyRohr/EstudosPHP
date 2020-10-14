<?php
	//Classe Pai
	class Veiculo{
		public $placa = null;
		public $cor = null;

		function acelerar(){
			echo 'Acelerar';
		}

		function freiar(){
			echo 'Freiar';
		}
	}

	//Classe Filho, utilizando herança da classe Veiculo / " extends Veiculo"
	class Carro extends Veiculo{
		public $teto_solar = true;

		function __construct($placa, $cor){
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function abrirTetoSolar(){
			echo 'Abrir teto solar';
		}

		function alterarPosicaoVolante(){
			echo 'Alterar a posição do volante';
		}
	}

	//Classe Filho, utilizando herança da classe Veiculo / " extends Veiculo"
	class Moto extends Veiculo{
		public $contraPesoGuidao = true;

		function __construct($placa, $cor){
			$this->placa = $placa;
			$this->cor = $cor;
		}

		function empinar(){
			echo 'Empinar';
		}
	}


	$carro = new Carro('ABC1234', 'Branca');
	$moto = new Moto('DEF6789', 'Preta');

	echo '<pre>';
	print_r($carro);
	echo '<br /><br />';
	print_r($moto);
	echo '</pre>';
	echo '<hr />';

	$carro->abrirTetoSolar();
	echo '<br />';
	$carro->acelerar();
	echo '<br />';
	$carro->freiar();

	echo '<br /><hr />';
	$moto->empinar();
	echo '<br />';
	$moto->acelerar();
	echo '<br />';
	$moto->freiar();
?>