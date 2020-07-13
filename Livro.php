<?php

class Livro{

public $titulo;
public $autor;
public $ano;
public $edicao;

public function getTitulo()
{
return $this->titulo;
}
public function getAutor()
{
return $this->autor;
}
public function getAno()
{
return $this->ano;
}
public function getEdicao()
{
return $this->edicao;
}
}

?>