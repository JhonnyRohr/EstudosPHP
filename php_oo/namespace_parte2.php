<?php
	require "./bibliotecas/lib1/lib1.php";
	require "./bibliotecas/lib2/lib2.php";


	// Exemplo de importação de namespace
	//Assim a classe Cliente passa a fazer parte deste documento
	/*use Beta\Cliente;

	$c = new Cliente();
	print_r($c);
	echo $c->__get('nome');
	*/

	// exemplo de importação de namespace com utilização de Aliasing(apelido), assim evita conflito da classe CLIENTE

	use Alfa\Cliente as Delta;
	use Beta\Cliente as Foxtrot;

	$c = new Delta();
	print_r($c);
	echo $c->__get('nome');

	$c = new Foxtrot();
	print_r($c);
	echo $c->__get('nome');

?>