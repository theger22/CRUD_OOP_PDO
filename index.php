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
	<table border="1">
		<tr>
			<td>NO</td>
			<td>Username</td>
			<td>Password</td>
			<td>Aksi</td>
		</tr>
		<?php
		 $view = $data->viewdata();
		 $no = 1;
		 while ($row = $view->fetch(PDO::FETCH_OBJ)) {
		 ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row->username; ?></td>
			<td><?php echo $row->password; ?></td>
			<td>
			<a href="<?php echo 'update.php?id='.$row->id; ?>">EDIT</a>|
			<a href="<?php echo 'php/proses.php?aksi=delete&id='.$row->id; ?>">DELETE</a></td>
		</tr>
		<?php $no++; } ?>
	</table>
	
	<br>
	<form action="php/proses.php?aksi=insert" method="POST">
		<label>username</label>
		<input type="text" name="username">
		
		<label>password</label>
		<input type="password" name="password"><br>

		<input type="submit" value="insert">
	</form>
</center>
</body>
</html>