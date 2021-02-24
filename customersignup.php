
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>




<?php 

include('partials/connect.php');
//include('partials/session.php');
session_start();
if(isset($_POST['register'])){
 
	$username = $_POST['username'];
	  $firstname = $_POST['firstname'];
	  $lastname = $_POST['lastname'];
	  $gender = $_POST['gender'];
	  $city = $_POST['city'];
	  $country = $_POST['country'];
	  $phonenumber = $_POST['phonenumber'];
	  
  	$password = $_POST['password'];

    $password2 = $_POST['password2'];

	if($password  === $password2){

		$sql_u = "SELECT * FROM customers WHERE username='$username'";
		$sql_e = "SELECT * FROM customers WHERE lastname='$lastname'";
		$res_u = mysqli_query($con, $sql_u);
		$res_e = mysqli_query($con, $sql_e);
  
		if (mysqli_num_rows($res_u) > 0) {
		  $name_error = "Sorry... email already taken";
		  echo "<script> alert('sorry ..username is already taken'); </script>"; 	
		  
		}else if(mysqli_num_rows($res_e) > 0){
		  $email_error = "Sorry... email already taken"; 	
		  echo "<script> alert('sorry ..email is already taken'); </script>"; 	
		   
		  
  
		}else{
			 $query = "INSERT INTO customers (firstname,lastname,username,gender,city,country,`phonenumber`,`password`) 
					  VALUES ('$firstname', '$lastname','$username','$gender', '$city','$country','$phonenumber','$password')";
			 $results = mysqli_query($con, $query);
			 header('location: index.php');
			 exit();
		}




	}

	else{

	 echo	"<script> alert('password did not match please try again..')</script>";
	}

  	
  }

			
	



?>


<?php include('partials/links.php');?>
<!------ Include the above in your HEAD tag ---------->







<div class="container">
<br>  



<div class="row justify-content-center">
<div class="col-md-6">
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Danger!</strong> 
</div>


<div class="card">
<header class="card-header">
	<a href="customerlogin.php" class="float-right btn btn-outline-primary mt-1">Log in</a>
	<h4 class="card-title mt-2">Sign up</h4>
</header>
<article class="card-body">
<form action = "" method = "post">
	<div class="form-row">
		<div class="col form-group">
			<label>First name </label>   
		  	<input type="text" name = "firstname" class="form-control" required>
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Last name</label>
		  	<input type="text" name ="lastname" class="form-control" required>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email address</label>
		<input type="email" name = "username" class="form-control" placeholder="" required>
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> <!-- form-group end.// -->
	<div class="form-group">
			<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="male">
		  <span class="form-check-label"> Male </span>
		</label>
		<label class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="gender" value="female">
		  <span class="form-check-label"> Female</span>
		</label>
	</div> <!-- form-group end.// -->
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>City</label>
		  <input type="text" name = "city" class="form-control" required>
		</div> <!-- form-group end.// -->
		<div class="form-group col-md-6">
		  <label>Country</label>
		  <select id="inputState" name = "country" class="form-control" required>
		    <option> Choose...</option>
		      <option>Uzbekistan</option>
		      <option>Russia</option>
		      <option selected="">United States</option>
		      <option>India</option>
		      <option>Afganistan</option>
		  </select>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row.// -->
	<div class="form-group">
		<label>Phone Number</label>
	    <input class="form-control" name = "phonenumber"type="text" required>
	</div> <!-- form-group end.// -->  
	<div class="form-group">
		<label>Create password</label>
	    <input class="form-control" name = "password"type="password" required>
	</div> <!-- form-group end.// -->  

	<div class="form-group">
		<label>Confirm password</label>
	    <input class="form-control" name = "password2"type="password" required>
	</div> <!-- form-group end.// -->  
    <div class="form-group">
        <button type="submit" name = "register" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->      
    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="customerlogin.php">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

