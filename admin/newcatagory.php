<?php include('admin_partials/head.php')  ;
include('admin_partials/session.php');
include('admin_partials/nav.php');
include('admin_partials/aside.php');
include("../partials/connect.php");
if(isset($_POST['Add'])){

    $name = $_POST['name'];

    $query = "INSERT into `categories` (name)
    VALUES ( '$name' )";
    $result = mysqli_query($con,$query);
 if($result == 1){
    echo '<script>window.location="categories.php"</script>';
   
 }
   
}

?>
<html>
<?php include('admin_partials/header.php'); ?>

<section class="content">


<div class="card">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
  <form method = "post" action = "<?php echo $_SERVER['PHP_SELF']; ?>" >
  <div class="form-group">
    <label for="category">Category Name</label>
    <input type="text" class="form-control" id="category_name" name = "name" placeholder="Enter Category Name">
    
  </div>
 
  
  <input type="submit" class="btn btn-primary" name = "Add" value = "Add" />
</form>
  </div>
</div>

</section>
</html>