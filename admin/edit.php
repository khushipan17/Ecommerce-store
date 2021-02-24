<?php include('admin_partials/head.php')  ;
include('admin_partials/session.php');
include('admin_partials/nav.php');
include('admin_partials/aside.php');
include("../partials/connect.php");

  $id = $_GET['id'];

$qry = mysqli_query($con,"SELECT * FROM `categories` where id =" .$_GET['id']); 
$data = mysqli_fetch_array($qry);

if(isset($_POST['update'])){

  echo "post method is working";

  $category = $_POST['name'];
  echo $category;

  $update = "UPDATE `categories` SET `name`= '$category' WHERE id = '$id'";

  $r = mysqli_query($con,$update);

  if(isset($r)){

    echo '<script>window.location="categories.php"</script>';
  }

  else {  echo "Error updating record: " . mysqli_error($con);}
}

 
?>
<html>
<?php include('admin_partials/header.php'); ?>

<section class="content">


<div class="card">
  <h5 class="card-header">Featured</h5>
  <div class="card-body">
  <form method = "post" action = "" >
  <div class="form-group">
    <label for="category">Category Name</label>
    <input type="text" class="form-control" id="category_name" value = "<?php echo $data['name'] ?>" name = "name" placeholder="Enter Category Name">
    
  </div>
 
  
  <input type="submit" class="btn btn-primary" name = "update" value = "Update" />
</form>
  </div>
</div>

</section>
</html>