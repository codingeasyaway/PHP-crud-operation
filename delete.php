<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
	$id = $_GET['deleteid'];

	$sql = "delete from crud_table where id = $id";
	$result = mysqli_query($con,$sql);
	if ($result) {
		header('location:show.php');

	}else{
echo '<script >alert("Data not deleted ");</script>';
		
	}
}
 ?>}
