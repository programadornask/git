<?php
abstract class Pessoa{
	private $nome;
	private $rg;
	private $cpf;

	function getNome(){
		return $this->nome;
	}

	function getRg(){
		return $this->rg;
	}

	function getCpf(){
		return $this->cpf;
	}

	function setNome($nome){
		$this->nome = $nome;
	}

	function setRg($rg){
		$this->rg = $rg;
	}
}