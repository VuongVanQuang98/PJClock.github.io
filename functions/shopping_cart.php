<?php 
    require"../functions/require.php";
    $date = $_POST["txtTime"];
    $cus_name = $_POST["txtName"];
    $cus_phonenumber = $_POST["txtPhone"];
    $cus_email = $_POST["txtEmail"];
    $cus_add = $_POST["txtAddress"];
    $cus_note = $_POST["txtNotes"];
    $p_name = $_POST["txtName_p"];
    $p_qty = $_POST["txtQuantity_p"];
    $p_total = $_POST["txtTotal"];
    

    $sql="INSERT INTO tblorder (id_order, _date, cus_name,cus_phonenumber, cus_email, cus_add, cus_notes, name_p, qty_p, _total, _status) VALUES (null, '$date', '$cus_name', '$cus_phonenumber', '$cus_email', '$cus_add', '$cus_note', '$p_name', '$p_qty', '$p_total','Padding')";
    
    $result = mysqli_query($conn, $sql) or die(mysqli_errno($conn));
            if($result)
            {
                ?>
                <script>
                    alert("Sent Message!")
                    window.location.href='../index.php';
                </script>
                <?php 
            }
            else
            {
            ?>
                <script > 
                    alert("Error");
                </script>
                <?php
            }
   require"../PHPMailer-6.1.5/src/Exception.php";
   require"../PHPMailer-6.1.5/src/PHPMailer.php";
   require"../PHPMailer-6.1.5/src/SMTP.php";

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   if (isset($_POST["send"])) {
    $email = new PHPMailer(true);
    $email->CharSet ="UTF-8";
    $email->SMTPDebug = 2;
    $email->isSMTP();
    $email->Host = 'smtp.gmail.com';
    $email->SMTPAuth = true;
    $email->Username = 'quangvv1998@gmail.com';
    $email->Password = 'quang1998';
    $email->SMTPSecure = 'tls';
    $email->Port = 587;
   
    $email->setFrom('system@gmail.com', 'DARKLOOK');
    $email->addAddress($_POST["txtEmail"]);
   
    $email->isHTML(true);
    $email-> Subject = ('[DarkLook] - cập nhật thông tin order của khách hàng');
    $emailContent = "
    <h3>Check your Information</h3>
    Your Name : " .$_POST["txtName"]. " <br>
    Phone Number: " .$_POST["txtPhone"]. "<br>
    Address: " .$_POST["txtAddress"]. "<br>
    Notes: " .$_POST["txtNotes"]. "<br>
    <hr>
    <h3>Check your order and we will contact you to confirm this order</h3>
    Product Name : " .$_POST["txtName_p"]. " <br>
    Price: " .$_POST["TextBox1"]."$<br>
    Qty: " .$_POST["txtQuantity_p"]."<br>
    Total Money: " .$_POST["txtTotal"]."$<br>
    
     "
 ;

    $email-> Body = $emailContent;
  if (!$email->Send())
  {
    echo "Error: $Correo->ErrorInfo";
  }
  else
  {
    echo "Message Sent!";
  }

    }
   
   
?>
 ?> 




