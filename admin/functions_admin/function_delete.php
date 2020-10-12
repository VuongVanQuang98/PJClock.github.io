<?php
require 'require_admin.php';
$id = $_REQUEST['id'];
$query="DELETE FROM tbl_product WHERE _id='$id'";
if(mysqli_query($conn, $query)){
    header ("Location:../productManagement.php");    
}
 else {
  echo "Failed";
}
?>

