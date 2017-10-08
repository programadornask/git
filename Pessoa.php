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
}