<?php
class crud
{
	
	public function __construct()
	{
		$this->db = new PDO("mysql:host=localhost;dbname=coding", 'root', 'theger09');
	}

	public function viewdata()
	{
		$query = $this->db->query("SELECT * FROM user");
		return $query;
	}

	public function viewedit($id)
	{
		$query = $this->db->query("SELECT * FROM user WHERE id = $id");
		return $query;
	}

	public function insert($username, $password)
	{
		$sql = "INSERT INTO `user`(`username`, `password`) VALUES (?, ?)";
		$query = $this->db->prepare($sql);
		
		$params = array(
			$username,
			$password,
		);

		$query->execute($params);
	}

	public function delete($id)
	{
		$sql = "DELETE FROM `user` WHERE `user`.`id` = ?";
		$query = $this->db->prepare($sql);
		
		$params = array(
			$id,
		);

		$query->execute($params);
	}

	public function update($username, $password, $id)
	{
		$sql = "UPDATE `user` SET `username` = ?, `password` = ? WHERE `id` = ?;";
		$query = $this->db->prepare($sql);
		
		$params = array(
			$username,
			$password,
			$id,
		);

		$query->execute($params);
	}

	public function input($jmlh)
	{
		$v = $jmlh; 
		for ($i = 1; $i <= $v; $i++) { 
			echo '<label>username</label>
				  <input type="text" name="username'.$i.'">

				  <label>password</label>
				  <input type="password" name="password'.$i.'"><br>';
		}
	}

}
?>