<?php

namespace App\model;

class Funcionario extends Pessoa{

    public $cargo;

    function __construct($nome, $idade, $genero, $nacionalidade, $cargo){
    parent::__construct ($nome, $idade, $genero, $nacionalidade, $cargo);
        $this->nome = $nome;
        $this->idade = $idade;
        $this->genero = $genero;
        $this->nacionalidade = $nacionalidade;
        $this->cargo = $cargo;
    } 
}
