<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<div id="Content">
		<div>
			<form action="index.php" method="POST" name="frmSearch">
		<input type="text" name="txtSearch" placeholder="Enter something to search ...">
		<input type="submit" name="btnSearch" value="Search">
	</form>
		</div>
		<div>
			<div style="background-color: blue">
				<p>a div tag</p>
			</div>
			<div style="background-color: lavender">
				<?php
					if (isset($_POST['btnSearch']))
					{
						require 'require.php';
					}
					else
					{
						$connection = mysqli_connect("localhost", "root","", "computing_research_project");
						$query = "SELECT * FROM tbl_product";
						$result = mysqli_query($connection, $query) or die(mysqli_errno($connection));
						while ($row = mysqli_fetch_array($result))
						{
							?>
								<table>
									<td><?=$row['_id']?></td>
								</table>
							<?php
						}
						mysqli_close($connection);
					}
				?>
			</div>		
			<button><a href="index.php">Back</a></button>
		</div>
	</div>
</body>
</html>


 <?php
                                        require_once 'connectsql.php' ;     
                                        $name = $_POST["txtName"];
                                        $sql ="SELECT * FROM tblproduct where name LIKE '%$name%'";
                                        $result = mysqli_query($conn, $sql);
                                               /* @var $result type */
                                               while ($row= mysqli_fetch_array($result))
                                        {
                                        ?>