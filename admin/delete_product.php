<?php
include("../partials/connect.php");

$id = $_GET['id'];

if(isset($_POST['delete'])){

  $getall = "SELECT * FROM products WHERE id = '$id'";

  $result = mysqli_query($con,$getall);


      if(isset($result)){
         if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){

               $name = $row['name'];
           //    $image =  'uploads'.$row['picture'];
           
               $image = 'uploads/'.$row['picture'];

              // echo $image;

               if(file_exists($image)){

                  unlink($image);

                  $delete = "DELETE FROM products where id = '$id'";

                  $q = mysqli_query($con,$delete);

                  if(isset($q)){

                     echo '<script>window.location="products.php"</script>';
                  }
                  else {
                     echo "something went wrong";
                  }

               }

            }
              


         }
            

      }




}
  
?>
