<?php 
 require_once 'koneksi.php';
 $db = new crud;
 
 if($_GET['aksi'] == "insert"){
 	$db->insert($_POST['username'], $_POST['password']);
 	header("location:../");
 }elseif($_GET['aksi'] == "delete"){
 	$db->delete($_GET['id']);
 	header("location:../");
 }elseif($_GET['aksi'] == "update"){
 	$db->update($_POST['username'], $_POST['password'], $_POST['id']);
 	header("location:../");
 }
 ?>