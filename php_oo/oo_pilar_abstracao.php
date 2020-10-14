<?php
	
	//modelo
	class Funcionario {
		//atributos
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;
		public $cargo = null;
		public $salario = null;

		//getter setters(overloading / sobrecarga)
		function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		function __get($atributo){
			return $this->$atributo;
		}

		/*
		function setNome($nome){
			$this->nome = $nome;
		}
		function setTelefone($telefone){
			$this->telefone = $telefone;
		}
		function setNumFilhos($numFilhos){
			$this->numFilhos = $numFilhos;
		}
		function getNome(){
			return $this->nome;
		}
		function getTelefone(){
			return $this->telefone;
		}
		function getNumFilhos(){
			return $this->numFilhos;
		}*/

		//métodos
		function resumirCadFunc(){
			return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s), trabalha como " . $this->__get('cargo') . " com um ganho de " . $this->__get('salario') . " reais, e  seu contato é " . $this->__get('telefone');
		}
	}
	$y = new Funcionario();
	$y->__set('nome', 'João');
	$y->__set('numFilhos', 4);
	$y->__set('telefone', '11 91234-1234');
	$y->__set('cargo', 'atendente');
	$y->__set('salario', 2000);
	echo $y->resumirCadFunc();	
?>