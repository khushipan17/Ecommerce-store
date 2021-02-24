<?php include('admin_partials/head.php')  ;
include('admin_partials/session.php');
include('admin_partials/nav.php');
include('admin_partials/aside.php');
include("../partials/connect.php");

$sql = "SELECT * FROM customers";
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
<div style = "margin-left : 2px;">   </div>

<section class="content">

<section class="content">
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">User Name</th>
            <th scope="col">Last Name</th>

          
            <th scope="col">Email</th>
            <th scope="col">City</th>
            <th scope="col">Country</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Orders</th>


            <th scope="col">Actions</th>
            
          </tr>
        </thead>
        <tbody>

       <?php if($result->num_rows > 0 ){ while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <th scope="row"> <?php echo $row['id'] ?> </th>
            <td> <?php echo $row['firstname'] ?></td>
            <td> <?php echo $row['lastname'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['city'] ?></td>
            <td><?php echo $row['country'] ?></td>
            <td><?php echo $row['phonenumber'] ?></td>

            <td></td>
  
     
          
          </tr>
        <?php } }?>

 

        
        
        </tbody>
      </table>
    </div>
  </div>
</div>



  </section>

  </section>

</html>