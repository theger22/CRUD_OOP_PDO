<?php
 require_once "php/koneksi.php";
 $data = new crud;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>saipul</title>
</head>
<body>
<center>
	<?php
	 $id = $_GET['id'];
	 $view = $data->viewedit($id);
	 $row = $view->fetch();
	 ?>
	<form action="php/proses.php?aksi=update" method="POST">
		<label>username</label>
		<input type="text" name="username" value="<?php echo $row['username'] ?>">
		
		<label>password</label>
		<input type="password" name="password" value="<?php echo $row['password'] ?>"><br>

		<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
		<input type="submit" value="update">
	</form>
</center>
</body>
</html>