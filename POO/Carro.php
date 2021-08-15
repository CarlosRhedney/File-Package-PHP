<?php
class Carro
{
	private $modelo;
	private $motor;
	private $ano;

	public function getModelo()
	{
		return $this->modelo;
	}
	public function setModelo($modelo)
	{
		$this->modelo = $modelo;
	}

	public function getMotor():float
	{
		return $this->motor;
	}
	public function setMotor($motor)
	{
		$this->motor = $motor;
	}

	public function getAno():int
	{
		return $this->ano;
	}
	public function setAno($ano)
	{
		$this->ano = $ano;
	}

	public function exibir()
	{
		return array(
			"Modelo"=>$this->getModelo(),
			"Motor"=>$this->getMotor(),
			"Ano"=>$this->getAno()
		);
	}
}
$golf = new Carro();
$golf->setModelo("Golf GT");
$golf->setMotor("2.0");
$golf->setAno("2021");
var_dump($golf->exibir());
?>