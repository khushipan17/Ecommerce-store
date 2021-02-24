<?php include('admin_partials/head.php')  ;
include('admin_partials/session.php');
include('admin_partials/nav.php');
include('admin_partials/aside.php');
include("../partials/connect.php");

$products = "SELECT * FROM products";
$result = mysqli_query($con,$products);




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
<div style = "margin-left : 2px;">  <a href ="newproduct.php"  name = "Add new " value = "Add New" class = "btn btn-md btn-primary"> Add New</a> </div>

<section class="content">

<section class="content">
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Product Name</th>
          
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
            
          </tr>
        </thead>
        <tbody>

        <?php if($result->num_rows > 0){  while($row = $result->fetch_assoc()){ 
            $imageURL = 'uploads/'.$row["picture"];
         
          ?>
          <tr>
            <th scope="row"><?php echo $row['id']; ?></th>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['category_id']; ?></td>
            <td> <img src = "<?php echo $imageURL; ?>" height = 200px width = 200px; /> </td>
            

           
           
            <td>
            
              <a href = "edit_product.php?id=<?php echo $row['id'];?>" type="button"  class="btn btn-success"><i class="fas fa-edit"></i></a>
         <form method = "post" action = "delete_product.php?id=<?php echo $row['id']?>" >
         
         <button name = "delete" type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
         </form>
           
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

  </section>

</html>