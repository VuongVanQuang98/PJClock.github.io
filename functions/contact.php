<?php
require "require.php";
    $cus_name = $_POST["c_name"];
    $cus_email = $_POST["c_email"];
    $cus_phone = $_POST["c_phone"];
    $cus_address = $_POST["c_add"];
    $cus_subject = $_POST["c_subject"];
    $cus_message = $_POST["c_message"];

    $sql  = " INSERT INTO tbl_customer values (null, '$cus_name', '$cus_email', '$cus_phone','$cus_address', '$cus_subject', '$cus_message','pending') ";

    $result = mysqli_query($conn, $sql) or die(mysqli_erroro($conn));
    if ($result) {
    	?>
    	<script>
    		alert("Sent Message");
    		window.location.href='../index.php';
    	</script>
    	<?php
    }
    else{
    	?>
    	<script>
    		alert("Error");
    	</script>
    	<?php
    }

?>