<?php

class Pessoa{

private $nome;
private $idade;
private $peso;
private $sexo;

public function getSexo()
{
return $this->sexo;
}

public function setSexo($sexo)
{
$this->sexo = $sexo;

return $this;
}



public function getPeso()
{
return $this->peso;
}

public function setPeso($peso)
{
$this->peso = $peso;

return $this;
}



public function getIdade()
{
return $this->idade;
}


public function setIdade($idade)
{
$this->idade = $idade;

return $this;
}



public function getNome()
{
return $this->nome;
}


public function setNome($nome)
{
$this->nome = $nome;

return $this;
}
}

?>