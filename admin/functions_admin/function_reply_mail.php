<?php
   require "require_admin.php";
   $cus_id = $_POST["txtcus_id"];
   $cus_name = $_POST["txtcus_name"];
   $cus_email = $_POST["txtcus_email"];
   $cus_subject = $_POST["txtcus_subject"];
   $cus_message = $_POST["txtcus_message"];
   $status = $_POST["txtStatus"];

   $sql ="UPDATE tbl_customer SET _name = '$cus_name',_email = '$cus_email',_subject = '$cus_subject',_message = '$cus_message',status = '$status' ";
$sql = $sql." WHERE id_cus  ='$cus_id'";
   $result = mysqli_query($conn, $sql) or die(mysqli_errno($conn));
            if($result)
            {
                ?>
                <script>
                	alert("Sent Message");
                	window.location.href='../infor_custom.php';
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
         require"../../PHPMailer-6.1.5/src/Exception.php";
         require"../../PHPMailer-6.1.5/src/PHPMailer.php";
         require"../../PHPMailer-6.1.5/src/SMTP.php";

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
    $email->addAddress($_POST["txtcus_email"]);
   
    $email->isHTML(true);
    $email-> Subject = $_POST["txtDark_title"];
    $emailContent = ('Hello <b>')  .   $_POST["txtcus_name"]   . ('</b>')  . $_POST["editor1"] ;

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
