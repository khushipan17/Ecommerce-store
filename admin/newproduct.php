<?php include('admin_partials/head.php')  ;
include('admin_partials/session.php');
include('admin_partials/nav.php');
include('admin_partials/aside.php');
include("../partials/connect.php");

$sql = "select * from categories";
$result = mysqli_query($con,$sql);
 
?>
<html>
<?php include('admin_partials/header.php'); ?>

<section class="content">


<div class="card">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">

  <form method = "post" action = "uploadimage.php" enctype='multipart/form-data' >

  <div class = "form-group">
  <label for = "Product Name" >Product Name</label>
  <input type = "text" name = "pname" value = "" class = "form-control" placeholder = "Enter Product Name" />
  </div>

  <div class = "form-group">
  <label for = "Product Price" >Product Price</label>
  <input type = "text" name = "price" value = "" class = "form-control" placeholder = "Enter Product Price" />
  </div>

  <div class = "form-group">
  <label for = "Product Description" >Product Description</label>
  <textarea name = "description" value = "" class = "form-control" placeholder = "Enter Product Price" > </textarea>
  </div>
  
  <div class = "form-group">
<label for = "Product category" >Product Category</label>

<select class = "dropdown" name = "category">
<?php  if(mysqli_num_rows($result) > 0 ) { while($row = mysqli_fetch_assoc($result)) {
         
         echo "<option value=".$row['id'].">".$row['name']."</option>";
         ?>
           
 
  <?php } }?>
</select>

</div>
 
  
  <div class="form-group">
  <input type="file" name="uploadfile" />
   
  </div>
      
</div>


  <input type="submit" class="btn btn-primary" name = "Add" value = "Add" />
</form>

  
  </div>
</div>

</section>
</html>