<?php
session_start();
include('partials/connect.php');

$total = $_POST["total"]; 
  $phone = $_POST['phone'];
 $address = $_POST['address'];
 $customerid = $_SESSION['customerid'];
 $payment = $_POST['payment'];

 echo $payment;



  $customer  = "insert into  `orders` (customer_id,phone,address,total,pay_method) values ('$customerid','$phone','$address','$total', '$payment')";  $result = mysqli_query($con,$customer);

 if(isset($result)){

     //echo "Your order successfully added";
  }

  $order = "select id from orders order by id  DESC limit 1";
  $r1 = mysqli_query($con,$order);
  $final = mysqli_fetch_assoc($r1);
  $orderid = $final['id'];

  foreach($_SESSION['cart'] as $key => $value){

    
     
      $pid = $value['item_id'];
      $quantity = $value['quantity'];

    
       

       $order_details = "insert into order_details( order_id,product_id,quantity) values ('$orderid','$pid','$quantity')";
        $r3 = mysqli_query($con,$order_details);
        if ($payment=="paypal") {
          $_SESSION['total']=$total;
          header('location: paypal.php');
        }else{
          echo "<script> alert('ORDER IS PLACED');
            window.location.href='index.php';
            </script>";
        }

        unset($_SESSION['cart']);
  }



?>

