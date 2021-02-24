<html>
<?php include("admin_partials/head.php")?>

<?php
include("../partials/connect.php");

if(isset($_POST['register'])){

    
    $email = $_POST['email'];
   
    $password = $_POST['password'];
   

    //$sql = "INSERT INTO admins(username,password)VALUES ('".$_POST["email"]."','".$_POST["password"]"')";

    $query = "INSERT into `admins` (username, password)
    VALUES ( '$email','$password' )";
  
    if (mysqli_query($con, $query)) {
        echo "<div class='form'>
        <h3>You are registered successfully.</h3>
        <br/>Click here to <a href='adminlogin.php'>Login</a></div>";
     } else {
        echo "Error: " . $query . "" . mysqli_error($con);
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
  <form  name="registration" name="myForm" action="adminRegister.php"  method="post">
    

    <div class="form-group">
    <input type="email" name="email" placeholder="Email"  id = "email_id" class = "form-control"  required/>
    </div>

    <div class="form-group">
    <input type="password" name="password" placeholder="Password" id = "password"  class = "form-control" required/>
    </div>
    <div class="col text-center">
    <input type="submit" name="register" class = "btn btn-primary" value="Register" id = "register"  />
    </div>


</form>

  </div>
</div>




</div>



</body>
</html>