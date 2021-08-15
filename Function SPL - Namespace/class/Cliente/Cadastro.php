<?php
namespace Cliente;
class Cadastro extends \Cadastro
{
	public function user()
	{
		echo "Atualizando o php e subindo para o github com ".$this->getUser().".";
	}

	public function mail()
	{
		echo "Como sempre o email ".$this->getMail()." e o tel ".$this->getPhone()." para contato!";
	}
}
?>