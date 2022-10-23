<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Updata Data</title>
  </head>
  <body>
    <h1 class="text-center">Update Insert</h1>

    <?php 
include 'connect.php';
$id = $_GET['updateid'];

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$contact = $_POST['contact'];

$sql = "UPDATE `crud_table` SET `id`='{$id}',`name`='{$name}',`email`='$email',`address`='$address',`contact`='$contact' WHERE id = $id";

$result = mysqli_query($con, $sql);
if($result){
  header('location:show.php');
}else{
  echo'<div class="alert alert-danger">Data not update!</div>';
}
}

 ?>

<div class="container">

<div class="row">
<div class="col-md-6 mx-auto card p-3 ">
	<?php 
$sql1 ="SELECT *from crud_table where id = $id";
$result1 = mysqli_query($con,$sql1);
$row = mysqli_fetch_assoc($result1);
	 ?>
<form method="post">
  Name : <input type="text" name="name" placeholder="name" required class="form-control" value="<?php echo $row['name']; ?>">
  Email : <input type="email" name="email" value="<?php echo $row['email']; ?>" placeholder="email" required class="form-control" >
  Address : <input type="text" name="address" value="<?php echo $row['address']; ?>" placeholder="address" required class="form-control">
  Contact : <input type="number" name="contact" value="<?php echo $row['contact']; ?>" placeholder="contact" required class="form-control"><br>

  <input type="submit" name="submit" class="btn btn-success" value="Update">
</form>

<a href="show.php" class="btn btn-info  my-4">Cancel</a>



</div>
</div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>