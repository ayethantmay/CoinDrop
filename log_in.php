<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "coindrop";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql="SELECT user_id,user_name,email,password from login_signup";
		$result=$conn->query($sql);

		if($result->num_rows>0)
		{
			$temp="f";

			while ($row=$result->fetch_assoc())
			{
				$email=$row["email"];
				$pass=$row["password"];
				$user_name=$row["user_name"];
				
				if($_POST['email'] == $email && $_POST['pw'] == $pass)
				{
					$temp="t";

					session_start();
					$_SESSION["uid"]=$row["user_id"];
					$_SESSION['uname']=$row["user_name"];
					$_SESSION['email']=$row["email"];
					$_SESSION["pass"]=$row["password"];
					$_SESSION['log_in'] = TRUE;
					header('location: index.php');
					exit;

				}

			}

			if($temp=="f")
			{
				?>
				<script type="text/javascript">
					alert("Incorrect email or password");
					location="login.php";
				</script>
<!--

//-->
</script>

		<?php
			}
		}

		/*if ( $_POST['email'] == 'admin@gmail.com' && $_POST['password'] == '1234' ) {
		// show success message
		// Start session and add session data
		session_start();
		$_SESSION['login'] = TRUE;
		header('Location:index.php');
		exit;	}*/

?>