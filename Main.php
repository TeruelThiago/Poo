<?php

require_once 'Pessoa.php';
require_once 'Carro.php';
require_once 'Livro.php';

echo "<h2>3 métodos diferentes de utilizar a POO (início)</h2>";

$Pessoa1 = new Pessoa();
$Pessoa1->setNome('Luan');
$Pessoa1->setIdade('16');
$Pessoa1->setPeso('60');
$Pessoa1->setSexo('Masculino');

echo "<h3>Pessoa</h3>";

echo "Nome : " . $Pessoa1->getNome() . "<br/> Idade : " . $Pessoa1->getIdade() . "<br/> Peso : " . $Pessoa1->getPeso() . "<br/> sexo : " . $Pessoa1->getSexo() ;

echo "<br/>" . "<br/>" . "<br/>";

echo "<h3>Carro</h3>";

$Carro1 = new Carro('volkswagem', 'preto', 'dh9868', 'fusca');
echo $Carro1->imprimir();
echo "<br/>" . "<br/>" . "<br/>";
echo "<h3>Livro</h3>";

$Livro1 = new Livro();
$Livro1->titulo = 'O auto da Barco do Inferno'; 
$Livro1->autor = 'Gil Vincente';
$Livro1->ano = '1517 - Primeira Edicao';
$Livro1->edicao = 'Indeterminada';

echo "Titulo : " . $Livro1->getTitulo() . "<br/> Autor : " . $Livro1->getAutor() . "<br/> Ano : " . $Livro1->getAno() . "<br/> edicao : " . $Livro1->getEdicao() ;

?>