# CRUD_OOP_PDO
How to Make Crud Php OOP PDO

1. put all the files to your web server
2. create a database in mysql with the name coding
3. coding.sql file import into your database
4. then open the file koneksi.php in php / koneksi.php
5. change the username and password that you use database
6. run in a browser

##koneksi.php
here all the functions and database connections (MySql) are situated, here using OOP PHP PDO
```
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
```