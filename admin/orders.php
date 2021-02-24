<?php include('admin_partials/head.php')  ;
include('admin_partials/session.php');
include('admin_partials/nav.php');
include('admin_partials/aside.php');
include("../partials/connect.php");

$orders = "SELECT * FROM orders";
$result = mysqli_query($con,$orders);




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


<section class="content">

<section class="content">
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">id</th>
            
            <th scope="col">Customer Name</th>
            <th scope="col">Customer Last Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Total</th>
            <th scope="col">Payment Method</th>
            <th scope="col"> Actions </th>
          
            
          </tr>
        </thead>
        <tbody>

        <?php if($result->num_rows > 0){  while($row = $result->fetch_assoc()){ 
           
           $customer_id = $row['customer_id'];
         
          ?>
          <tr>
            <th scope="row"><?php echo $row['id']; ?></th>

            <th scope = "row" style = "display:none;"> <?php echo $row['customer_id']; ?> </th>
            <?php 
             
             $customer = "SELECT firstname,lastname  from customers where id = '$customer_id' ";
             $f = mysqli_query($con,$customer);
             if(isset($f)){
                while($f1 = $f->fetch_assoc()){
                    ?> 

<td><?php  echo $f1['firstname'];  ?></td>  
<td><?php  echo $f1['lastname'];  ?></td>  


               <?php  } 


             }
            
            ?>
         
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['total']; ?></td>
            <td><?php echo $row['pay_method']; ?></td>
            <td> <a href = "order_details.php?id=<?php echo $row['id']; ?>"> Details </a> </td>
          
            

           
           
         
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