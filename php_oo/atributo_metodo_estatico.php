<?php
	class Exemplo{
		public static $atributo1 = "Eu sou um atributo estático";
		public $atributo2 = "Eu sou um atributo normal";

		public static function metodo1(){
			echo 'Eu sou um método estático';
		}

		public function metodo2(){
			echo 'Eu sou um método normal';
		}
	}

/*
Acesso estático
Não é necessário estanciar o objeto para acessa atributo e metodo estático
$x = new Exemplo();
*/
echo Exemplo::$atributo1;
echo '<br />';
Exemplo::metodo1();

Echo '<br /><hr /><br />';

/*
Acesso normal
*/

$y = new Exemplo();
echo $y->atributo2;
echo '<br />';
$y->metodo2();
?>