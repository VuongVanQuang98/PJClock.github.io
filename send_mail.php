<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	
   require"PHPMailer-6.1.5/src/Exception.php";
   require"PHPMailer-6.1.5/src/PHPMailer.php";
   require"PHPMailer-6.1.5/src/SMTP.php";

   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   if (isset($_POST["send"])) {
   $email = new PHPMailer(true);

 
    $email->SMTPDebug = 2;
    $email->isSMTP();
    $email->Host = 'smtp.gmail.com';
    $email->SMTPAuth = true;
    $email->Username = 'quangvv1998@gmail.com';
    $email->Password = 'quang1998';
    $email->SMTPSecure = 'tls';
    $email->Port = 587;
   
    $email->setFrom('testsystem@gmail.com', 'From Quangteowwithlove');
    $email->addAddress($_POST["mail"], $_POST["name"]);
   
    $email->isHTML(true);
    $email->Subject = $_POST["title"];
    $email->Body = $_POST["content"] ;
   
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

<form method="post" action="#">
      <table>
	<tr>
		<td>Tên</td>
		<td><input name="name" type="text"></td>
	</tr>
	<tr>
		<td>Chủ đề </td>
		<td><input name="title" type="text"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input name="mail" type="text"></td>
	</tr>
	<tr>
		<td>Noi dung </td>
		<td><input name="content" type="text"></td>
	</tr>
	<tr>
		<td><input type="submit" value="send" name="send"></td>
		 
	</tr>
</table>
</form>
</body>
</html>