<?php

namespace App\model;

class Pessoa{

    public $nome;
    public $idade;
    public $genero;
    public $nacionalidade;

    function __construct($nome, $idade, $genero, $nacionalidade){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->genero = $genero;
        $this->nacionalidade = $nacionalidade;
    } 


}