<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Insert Data</title>
  </head>
  <body>
    <h1 class="text-center">Data Insert</h1>

<div class="container">
<a href="show.php" class="btn btn-info  my-4">Show Record</a>
<div class="row">
<div class="col-md-6 mx-auto card p-3 ">
<form method="post">
  Name : <input type="text" name="name" placeholder="name" required class="form-control">
  Email : <input type="email" name="email" placeholder="email" required class="form-control">
  Address : <input type="text" name="address" placeholder="address" required class="form-control">
  Contact : <input type="number" name="contact" placeholder="contact" required class="form-control"><br>

  <input type="submit" name="submit" class="btn btn-success">
</form>
<?php 
include 'connect.php';

if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$contact = $_POST['contact'];

$sql = "INSERT INTO `crud_table`( `name`, `email`, `address`, `contact`) VALUES ('{$name}','{$email}','{$address}','{$contact}')";

$result = mysqli_query($con, $sql);
if($result){
  echo '<div class="alert alert-success">Data inserted sucessfully!</div>';
}else{
  echo'<div class="alert alert-danger">Data not insert!</div>';
}
}

 ?>



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