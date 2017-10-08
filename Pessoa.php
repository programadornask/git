<?php
abstract class Pessoa{
	private $nome;
	private $rg;

	function __construct($nome, $rg){
		$this->nome = $nome;
		$this->rg = $rg;
	}
}