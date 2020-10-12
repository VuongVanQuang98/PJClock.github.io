<?php
require 'require_admin.php';
$id = $_POST["txtID"];
$name= $_POST["txtName"];
$price= $_POST["txtPrice"];
$quantity= $_POST["txtQuantity"];
$description= $_POST["txtDescription"];
$category= $_POST["txtCategory"];
$image1 = $_FILES["txtimg1"]["name"];
$image2 = $_FILES["txtimg2"]["name"];
$image3 = $_FILES["txtimg3"]["name"];
$image4 = $_FILES["txtimg4"]["name"];
$image5 = $_FILES["txtimg5"]["name"];
$sql = " UPDATE tbl_product SET _name='$name',_price='$price',_quantity= $quantity,
                             _description='$description',_idCategory='$category'";
if ($image1 != "")
{
    $sql = $sql.", img1='$image1'";
}
if ($image2 != "")
{
    $sql = $sql.", img2='$image2'";
}
if ($image3 != "")
{
    $sql = $sql.", img3='$image3'";
}
if ($image4 != "")
{
    $sql = $sql.", img4='$image4'";
}
if ($image5 != "")
{
    $sql = $sql.", img5='$image5'";
}
$sql = $sql." WHERE _id  ='$id'";
$result = mysqli_query($conn, $sql) or die(mysqli_errno($conn));
            if($result)
            {
                echo "OK";
                header("Location: ../productManagement.php");
                    
            }
            else 
            {
            	?> 
            
                <script > 
                    alert("Error");
                </script>
                <?php
            }
?>



















