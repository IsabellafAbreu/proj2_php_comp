<?php

include_once __DIR__. "/../vendor/autoload.php";

    use App\model\Pessoa;
    use App\model\Funcionario;

    $pessoa = new Pessoa("Isa", 19, "Fem", "Br");
    $funcionario = new Funcionario("Matheus", 20, "Masc", "Br", "TI");
  
echo"<h3>Informações da Pessoa:</h3>";
echo $pessoa->nome;
echo"<br>";
echo $pessoa->idade;
echo"<br>";
echo $pessoa->genero;
echo"<br>";
echo $pessoa->nacionalidade;
echo"<br>";

echo"<hr>";

echo"<h3>Informações do Funcionário:</h3>";
echo $funcionario->nome;
echo"<br>";
echo $funcionario->idade;
echo"<br>";
echo $funcionario->genero;
echo"<br>";
echo $funcionario->nacionalidade;
echo"<br>";
echo $funcionario->cargo;

