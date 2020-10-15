<?php

	//implementando interface é padronizado as nomenclaturas dos métodos
	interface EquipamentoInterface{
		public function ligar();
		public function desligar();
	}

	class Geladeira implements EquipamentoInterface{
		public function abrirPorta(){
			echo 'Abrir porta';
		}
		public function ligar(){
			echo 'Ligar';
		}
		public function desligar(){
			echo 'Desligar';
		}
	}

	class TV implements EquipamentoInterface{
		public function mudarCanal(){
			echo 'Mudar canal';
		}
		public function ligar(){
			echo 'Ligar';
		}
		public function desligar(){
			echo 'Desligar';
		}
	}
	$geladeira = new Geladeira();
	$tv = new TV();

	// Modelo com mais de uma interface
	// ------------------------------------

	interface MamiferoInterface {
		public function respirar();
	}
	interface TerrestreInterface {
		public function andar();
	}
	interface AquaticoInterface {
		public function nadar();
	}

	class Pessoa implements MamiferoInterface, TerrestreInterface{
		public function conversar(){
			echo 'Conversar';
		}
		public function respirar(){
			echo 'Respirar';
		}
		public function andar(){
			echo 'Andar';
		}
	}

	class Baleia implements MamiferoInterface, AquaticoInterface{
		public function esguichar(){
			echo 'Esguichar';
		}
		public function respirar(){
			echo 'Respirar';
		}
		public function nadar(){
			echo 'nadar';
		}
	}

	$pessoa = new Pessoa();
	$baleia = new Baleia();

	// Modelo com herança de interface
	interface AnimalInterface{
		public function comer();
	}
	interface AveInterface extends AnimalInterface{
		public function voar();
	}

	class Papagaio implements AveInterface{
		public function comer(){
			echo 'Comer';
		}
		public function voar(){
			echo 'Voar';
		}
	}

	$papagaio = new Papagaio();

?>