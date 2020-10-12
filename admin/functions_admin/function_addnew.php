<?php
require 'require_admin.php';
$id = $_POST["txtID"];
$name= $_POST["txtName"];
$price= $_POST["txtPrice"];
$quantity= $_POST["txtQuantity"];
$description= $_POST["txtDescription"];
$category = $_POST['txtCategory'];
$image1 = $_FILES["txtimg1"]["name"];
$file_tmp = $_FILES['txtimg1']['tmp_name'];
$image2 = $_FILES["txtimg2"]["name"];
$file_tmp = $_FILES['txtimg2']['tmp_name'];
$image3 = $_FILES["txtimg3"]["name"];
$file_tmp = $_FILES['txtimg3']['tmp_name'];
$image4 = $_FILES["txtimg4"]["name"];
$file_tmp = $_FILES['txtimg4']['tmp_name'];
$image5 = $_FILES["txtimg5"]["name"];
$file_tmp = $_FILES['txtimg5']['tmp_name'];


move_uploaded_file($file_tmp,"<../images/>".$file_name);

$sql = "INSERT INTO tbl_product values ('$id','$name','$price','$quantity','$description','$category','$image1','$image2','$image3','$image4','$image5')";

  $result = mysqli_query($conn, $sql) or die(mysqli_errno($conn));
            if($result)
            {
                header("Location:../productManagement.php");
                ?>             
            }
            else
            {
            
                <script > 
                    alert("Error");
                </script>
                <?php
            }
            ?> 
