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

		function mudarMarcha(){
			echo 'Embreagem com o pé e marcha com a mão';
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

		//Aqui entra um exemplo de POLIMORFISMO
		//onde herda a função da classe pai, mas necessita agir de forma diferente
		function mudarMarcha(){
			echo 'Embreagem com a mão e marcha com o pé';
		}
	}

	class Caminhao extends Veiculo{
		function levantarCacamba(){
			echo 'Levantar caçamba';
		}
	}


	$carro = new Carro('ABC1234', 'Branca');
	$moto = new Moto('DEF6789', 'Preta');
	$caminhao = new Caminhao();
	
	echo 'Carro: ';
	$carro->mudarMarcha();
	echo '<br /><br />';

	
	echo 'Moto: ';
	$moto->mudarMarcha();
	echo '<br/><br />';

	echo 'Caminhão: ';
	$caminhao->mudarMarcha();
?>	