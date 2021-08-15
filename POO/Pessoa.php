<?php
class Pessoa
{
	public $nome = "Rasmus Lerdorf";
	protected $idade = 52;
	private $senha = "12345";

	public function verDados()
	{
		echo $this->nome."<br/>";
		echo $this->idade."<br/>";
		echo $this->senha."<br/>";
	}
}
class Programador extends Pessoa
{
	public function verDados()
	{
		echo $this->nome."<br/>";
		echo $this->idade."<br/>";
		echo $this->senha."<br/>";
	}
}
$pessoa = new Programador();
$pessoa->verDados();
?>