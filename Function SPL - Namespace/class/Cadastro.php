<?php
class Cadastro
{
	private $user;
	private $mail;
	private $phone;

	public function getUser()
	{
		return $this->user;
	}
	public function setUser($user)
	{
		$this->user = $user;
	}

	public function getMail()
	{
		return $this->mail;
	}
	public function setMail($mail)
	{
		$this->mail = $mail;
	}

	public function getPhone()
	{
		return $this->phone;
	}
	public function setPhone($phone)
	{
		$this->phone = $phone;
	}

	public function __toString()
	{
		return json_encode(array(
			"User"=>$this->getUser(),
			"Mail"=>$this->getMail(),
			"Phone"=>$this->getPhone()
		));
	}
}
?>