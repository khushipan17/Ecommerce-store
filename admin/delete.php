
<?php
include("../partials/connect.php");

$id = $_GET['id'];
$sql = "DELETE FROM categories WHERE id = '$id' ";
   
   if (mysqli_query($con, $sql)) {
      echo '<script>window.location="categories.php"</script>';
   } else {
      echo "Error deleting record: " . mysqli_error($con);
   }
   ?>