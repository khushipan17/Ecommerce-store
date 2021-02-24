<html>

<?php 
session_start();
include("admin_partials/head.php")?>

<?php
include("../partials/connect.php");



if(isset($_POST['login'])){

    $email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * from admins Where username='$email' AND password='$password'";

$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$_SESSION['email'] = $row['username'];

$_SESSION['password'] = $row['password'];

if($email=$row['username'] AND $password=$row['password']){
    header('location: index.php');
  }else{
    header('location: adminlogin.php');
  }


}




    
   

?>

<style>

    .smallcontainer {
        margin: auto;
	width: 40%;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<body>


<div class= "smallcontainer" >



<div class="card">
  <div class="card-header">
  Sign Up here
  </div>
  <div class="card-body">
  <form  name="registration" action="adminlogin.php" method="post">
    

    <div class="form-group">
    <input type="email" name="email" id = "email" placeholder="Email" required class = "form-control" />
    </div>

    <div class="form-group">
    <input type="password" name="password" id = "password" placeholder="Password" required  class = "form-control"/>
    </div>
    <div class="col text-center">
    <input type="submit" name="login" class = "btn btn-primary" value="Login" />
    </div>


</form>

  </div>
</div>




</div>




</body>
</html>