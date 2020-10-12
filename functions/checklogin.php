        <?php
        session_start();
          require"require.php";
          if (isset($_POST["btn_submit"])) {
    // lấy thông tin người dùng
    $username = $_POST["username"];
    $password = $_POST["password"];
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);
    if ($username == "" || $password =="") {
      // echo "WARNING: username or password not available!";
      ?>
      <script>
      	alert("WARNING: username or password is missing!");
      	window.location.href='../login.php';
      </script>
      <?php
    }else{
      $sql = "select * from tbl_admin where _username = '$username' and _password = '$password' ";
      $query = mysqli_query($conn,$sql);
      $num_rows = mysqli_num_rows($query);
      if ($num_rows==0) {
        // echo "WARNING: username or password incorrect !";
        //  ?>
      <script>
      	alert("WARNING: username or password incorrect!");
      	window.location.href='../login.php';
      </script>
      <?php
      }else{
        //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
        $_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                // Location.assign("http://localhost/pjclock/admin/adminpage.php");
                ?>
					<script>
						alert("Welcome to <?=$_SESSION['username']?>");
						window.location.href = '../admin/adminpage.php';
					</script>
                <?php
              
      }
    }
  }
        ?>