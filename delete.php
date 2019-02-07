<?php 
	include 'db.php';

	$id = $_GET['id'];

	$sql = "delete from item where id ='$id'";

	$val =$db->query($sql);

  header('Location:index.php');


 ?>
