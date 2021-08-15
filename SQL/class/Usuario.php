<?php
class Usuario
{
	private $id;
	private $user;
	private $mail;
	private $phone;
	private $dataRegister;

	public function getId()
	{
		return $this->id;
	}
	public function setId($id)
	{
		$this->id = $id;
	}

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

	public function getDataRegister()
	{
		return $this->dataRegister;
	}
	public function setDataRegister($dataRegister)
	{
		$this->dataRegister = $dataRegister;
	}

	public function loadById($id)
	{
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM usuarios WHERE id = :id", array(
			":id"=>$id
		));
		if(isset($results) && count($results) > 0)
		{
			$this->setData($results[0]);
		}
	}

	public static function getList()
	{
		$sql = new Sql();
		return $sql->select("SELECT * FROM usuarios ORDER BY id");
	}

	public static function search($user)
	{
		$sql = new Sql();
		return $sql->select("SELECT * FROM usuarios WHERE usuario Like :user", array(
			":user"=>"%".$user."%"
		));
	}

	public function login($user, $mail)
	{
		$sql = new Sql();
		$results = $sql->select("SELECT * FROM usuarios WHERE usuario = :user AND email = :mail", array(
			":user"=>$user,
			":mail"=>$mail
		));
		if(isset($results) && count($results) > 0)
		{
			$this->setData($results[0]);
		}
	}

	public function __toString()
	{
		return json_encode(array(
			"Id"=>$this->getId(),
			"User"=>$this->getUser(),
			"Mail"=>$this->getMail(),
			"Phone"=>$this->getPhone(),
			"DataRegister"=>$this->getDataRegister()->format("d/m/Y H:i:s")
		));
	}

	public function setData($data)
	{
		$this->setId($data["id"]);
		$this->setUser($data["usuario"]);
		$this->setMail($data["email"]);
		$this->setPhone($data["tel"]);
		$this->setDataRegister(new DateTime($data["data_cadastro"]));
	}
}
?>