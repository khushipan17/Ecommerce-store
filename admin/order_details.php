<?php ?>

<?php include('admin_partials/head.php')  ;
include('admin_partials/session.php');
include('admin_partials/nav.php');
include('admin_partials/aside.php');
include("../partials/connect.php");
$id = $_GET['id'];
echo $id;

$orders = "SELECT * FROM orders join order_details on orders.id = '$id' ";
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
      <?php
      
      $product = "select * from order_details where order_id = '$id' ";
      $g = mysqli_query($con,$product);
      if($g->num_rows > 0){

        while($row = $g->fetch_assoc()){
            $pid = $row['product_id'];
            $qty = $row['quantity'];
       
            $g1 = "select * from products where id = '$pid'";
            $g2 = mysqli_query($con,$g1);
            if($g2->num_rows > 0 ) {
                while ($g3 = $g2->fetch_assoc()){

                    $product_name = $g3['name'];
                    $price = $g3['price'];
                    $imageURL = 'uploads/'.$g3["picture"];
                    $description = $g3['description'];
               
      
      ?>      
           <td><div class="card">
  <div class="card-header">
  <?php echo $product_name?>
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <img src = "<?php echo $imageURL; ?>" height = 200px width = 200px; />
    <p class="card-text"><?php echo $description ;?></p>
    <p class="card-text">$<?php echo $price ;?></p>
    <p class="card-text">Order quantity = <?php echo $qty?></p>
    <a href="products.php" class="btn btn-primary">Check Product</a>
  </div>
</div> </td> <?php 

}
}

}
}
?>
          
            

           
           
         
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