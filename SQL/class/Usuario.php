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
		return $sql->select("SELECT * FROM usuarios WHERE usuario LIKE :user", array(
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
		}else
		{
			echo "Usúario e ou senha inválidos!";
		}
	}

	public function insert()
	{
		$sql = new Sql();
		$results = $sql->select("CALL sp_usuarios_insert(:user, :mail, :phone)", array(
			":user"=>$this->getUser(),
			":mail"=>$this->getMail(),
			":phone"=>$this->getPhone()
		));
		if(isset($results) && count($results) > 0)
		{
			$this->setData($results[0]);
		}
	}

	public function update($user, $mail, $phone)
	{
		$this->setUser($user);
		$this->setMail($mail);
		$this->setPhone($phone);
		$sql = new Sql();
		$sql->query("UPDATE usuarios SET usuario = :user, email = :mail, tel = :phone WHERE id = :id", array(
			":user"=>$this->getUser(),
			":mail"=>$this->getMail(),
			":phone"=>$this->getPhone(),
			":id"=>$this->getId()
		));
	}

	public function delete()
	{
		$sql = new Sql();
		$sql->query("DELETE FROM usuarios WHERE id = :id", array(
			":id"=>$this->getId()
		));
		$this->setId(0);
		$this->setUser("");
		$this->setMail("");
		$this->setPhone("");
		$this->setDataRegister(new DateTime());
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