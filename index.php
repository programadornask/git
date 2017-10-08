<?php
class Carro{
	private $modelo;
	private $cor;
	private $preco;
	private $usado;

	function __construct(string $modelo,  string $cor, double $preco, boolean $usado){
		$this->modelo = $modelo;
		$this->cor = $cor;
		$this->preco = $preco;
		$this->usado = $usado;
	}

	function __toString(){
		return "Modelo: ".$this->modelo."<br>Cor: ".$this->cor."<br>Preço: ".$this->preco."<br>Usado: ".$this->usado;
	}

	function setModelo(string $modelo){
		$this->modelo = $modelo;
	}

	function getModelo(){
		return $this->modelo;
	}

	function setPreco(double $preco){
		$this->preco = $preco;
	}

	function getPreco(){
		return $this->preco;
	}

	function setCor(string $cor){
		$this->cor = $cor;
	}

	function getCor(){
		return $this->cor;
	}

	function setUsado(boolean $usado){
		$this->usado = $usado;
	}

	function getUsado(){
		return $this->usado;
	}

	function anda(){
		return 'O carro está andando...';
	}
}