<?php

include("../partials/connect.php");

if(isset($_POST['Add'])) {
    $pname = $_POST['pname'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];


$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];

$folder = 'uploads/';

move_uploaded_file($filetmpname, $folder.$filename);

$sql = "INSERT INTO `products` (`picture` ,`description` , `price`,`name`,`category_id`)  VALUES ('$filename','$description','$price','$pname','$category')";
$qry = mysqli_query($con,  $sql);
if( $qry) {
    echo '<script>window.location="products.php"</script>';
}
}
 
?>
<!-- for updating records -->
<?php

echo "POST method is working";

if(isset($_POST['Update'])){

    $id = $_POST['id'];
  
    
    $edit_name = $_POST['edit_name'];
    $edit_price = $_POST['edit_price'];
    $edited_description = $_POST['edit_description']; 
    $edited_category = $_POST['edit_category'];
   
    $filename = $_FILES['edit_uploadfile']['name'];
$filetmpname = $_FILES['edit_uploadfile']['tmp_name'];

$folder = 'uploads/';

move_uploaded_file($filetmpname, $folder.$filename);

   //see how you can edit image in youtube vedio .https://www.youtube.com/watch?v=pI4NuDjxUnw


$update = "UPDATE products SET `name` = '$edit_name' , `price` = '$edit_price' , `description` = '$edited_description' ,`category_id` = '$edited_category' , `picture` = '$filename' WHERE `id` = '$id'";

if($result = mysqli_query($con,$update)){

    echo '<script>window.location="products.php"</script>';
}
else {
    echo "Error updating record: " . mysqli_error($con);
}

}

?>


 
 
