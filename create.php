<?php  
include 'db.php';

if(isset($_POST['submit'])){

	$name = $_POST['item'];
	$des = $_POST['description'];
	//$img = $_POST['fileToUpload'];
	$img = $_FILES['image'] ['name'];
	$tmp_image=$_FILES['image'] ['tmp_name'];
	move_uploaded_file($tmp_image, "images/$img");


	

	//$sql = "INSERT INTO item (item) valuse('$name')";
	//$sql = "INSERT INTO `item`(`item`, `description`) VALUES ('$name', '$description')";
	$sql ="INSERT INTO item (`item`, `description`, `image`) VALUES ('$name', '$des', '$img')";

	$val = $db->query($sql);
	



header('Location:index.php');

}


?>



