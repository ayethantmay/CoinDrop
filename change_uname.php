<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coindrop";

$conn = new mysqli ( $servername, $username, $password, $dbname );

if ($conn->connect_error) {
	die ( "Connection failed: " . $conn->connect_error );
}

session_start();

$sql1 = "SELECT user_id,user_name from login_signup";
$result1 = $conn->query ( $sql1 );


if ($result1->num_rows >= 0) {

	while ( $row = $result1->fetch_assoc () ) {

		if($_SESSION["uid"] == $row ["user_id"])
		{
			$sql = "UPDATE login_signup SET user_name='".$_POST["uname"]."' WHERE user_id=".$_SESSION["uid"];
			$result = $conn->query($sql);

			$_SESSION["uname"] = $_POST["uname"];
			?>

			 <script type="text/javascript">

					alert("Hello");
					alert("Your username is changed.");
					location="user_info.php";
				</script>
			<?php
			header("location: user_info.php");
		}

		}
}


?>