<?php include('admin_partials/head.php')  ;
include('admin_partials/session.php');
include('admin_partials/nav.php');
include('admin_partials/aside.php');
include("../partials/connect.php");

$sql = "select * from categories";
$result = mysqli_query($con,$sql); 
 
$id = $_GET['id'];


$query = "select * from products where id = '$id'";
$q = mysqli_query($con,$query);
?>
<html>
<?php include('admin_partials/header.php'); ?>

<section class="content">


<div class="card">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">

  <form method = "post" action = "uploadimage.php" enctype='multipart/form-data' >
 <?php if(mysqli_num_rows($q) > 0 ) { while($r = mysqli_fetch_assoc($q)) {
           $imageURL = 'uploads/'.$r["picture"];
       
         ?>
         <input type='hidden' id='id' name='id' value="<?php echo  $id ;?> ">
  <div class = "form-group">
  <label for = "Product Name" >Product Name</label>
  <input type = "text" name = "edit_name" value = "<?php echo $r['name']; ?>" class = "form-control" placeholder = "Enter Product Name" />
  </div>

  <div class = "form-group">
  <label for = "Product Price" >Product Price</label>
  <input type = "text" name = "edit_price" value = "<?php echo $r['price']; ?>" class = "form-control" placeholder = "Enter Product Price" />
  </div>

  <div class = "form-group">
  <label for = "Product Description" >Product Description</label>
  <textarea name = "edit_description" class = "form-control" placeholder = "Enter Product Price" > <?php echo $r['description']; ?></textarea>
  </div>
  
  <div class = "form-group">
<label for = "Product category" >Product Category</label>

<select class = "dropdown" name = "edit_category" value = "">
<?php  if(mysqli_num_rows($result) > 0 ) { while($row = mysqli_fetch_assoc($result)) {
         
         echo "<option value=".$row['id'].">".$row['name']."</option>";
         ?>
           
 
  <?php } }?>
</select>

</div>
 
 
  <div class="form-group">
  <input type="file" name="edit_uploadfile" />
   
   <img src = "<?php echo $imageURL ?>" width = 100px; height = 100px; />
  </div>
      
</div>
<?php }} ?>

  <input type="submit" class="btn btn-primary" name = "Update" value = "Update" />
</form>

  
  </div>
</div>

</section>
</html>