<?php 

session_start();

$cart_id = $_GET['cart_id'];

if(!empty($_SESSION['cart'])){

$checker = array_column($_SESSION['cart'],'item_name');

if(in_array($_GET['cart_id'],$checker)){

     echo "<script>  alert('Product is Already Added in the Cart');
    window.location.href = 'shopping-cart.php';
    
    </script>";
}
else{$count = count($_SESSION['cart']);
    $_SESSION['cart'][$count] = array('item_id' => $_GET['cart_id'],'item_name' => $_GET['cart_name'] , 'item_price' => $_GET['cart_price'],'quantity'=>1);
     echo "<script> alert('product added to the cart');
     window.location.href = 'shopping-cart.php';
    
     </script>";

}


}
else{
$_SESSION['cart'][0]  = array('item_id' => $_GET['cart_id'],'item_name' => $_GET['cart_name'] , 'item_price' => $_GET['cart_price'],'quantity'=>1);

 echo "<script> alert('product added to the cart');
 window.location.href = 'product.php';

 </script>";

}

//print_r($_SESSION['cart']);
//session_destroy();



?>