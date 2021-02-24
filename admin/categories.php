<?php include('admin_partials/head.php')  ;
include('admin_partials/session.php');
include('admin_partials/nav.php');
include('admin_partials/aside.php');
include("../partials/connect.php");

$sql = "select * from categories";
$result = mysqli_query($con,$sql);




?>

<html>
<style>
.container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}

.table-image {
  td, th {
    vertical-align: middle;
  }
}
</style>

<?php include('admin_partials/header.php'); ?>
<div style = "margin-left : 2px;">  <a href ="newcatagory.php"  name = "Add new " value = "Add New" class = "btn btn-md btn-primary"> Add New</a> </div>

<section class="content">
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Day</th>
            <th scope="col">Category Name</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

        <?php if($result->num_rows > 0){  while($row = $result->fetch_assoc()){  ?>
          <tr>
            <th scope="row"><?php echo $row['id']; ?></th>
            <td><?php echo $row['name']; ?></td>
           
           
            <td>
            
              <a href = "edit.php?id=<?php echo $row['id'];?>" type="button"  class="btn btn-success"><i class="fas fa-edit"></i></a>
            <a href ="delete.php?id=<?php echo $row['id'];?>" type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
            </td>
          </tr>
          <?php
 }
}


 ?>

        
        
        </tbody>
      </table>
    </div>
  </div>
</div>



  </section>

</html>
