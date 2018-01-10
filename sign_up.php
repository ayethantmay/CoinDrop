<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coindrop";

// Create connection
$conn = new mysqli ( $servername, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
	die ( "Connection failed: " . $conn->connect_error );
}

$sql = "SELECT user_id,email from login_signup";
$result = $conn->query ( $sql );

if ($result->num_rows > 0) {
	$temp = "t";

	while ( $row = $result->fetch_assoc () ) {

		$email = $row ["email"];

		if ($_POST ['email'] == $email) {
			$temp = "f";

			?>

<script type="text/javascript">
					alert("The email already exists.Please enter new email.");
					location="signup.php";
				</script>

<?php
		}
	}

		if ($temp == "t") {
			$sql1 = "select user_id from login_signup";
			$result1 = $conn->query ( $sql1 );

			if ($result1->num_rows >= 0) {
				while ( $row = $result1->fetch_assoc () ) {
					$userid = $row ["user_id"] + 1;
				}
			}

			$user_id = $userid;
			$user_name = $_POST ["name"];
			$email = $_POST ["email"];
			$pass_word = $_POST ["pass"];
			$re_pass = $_POST ["repass"];
			$totalcoin=0;
			$sql2 = "INSERT into login_signup values(" . $user_id . ",'" . $user_name . "','" . $email . "','" . $pass_word . "',".$totalcoin.")";
			$result2 = $conn->query ( $sql2 );

			session_start ();
			$_SESSION ["log_in"] = TRUE;
			$_SESSION ["uname"] = $user_name;
			$_SESSION["email"] = $email;
			$_SESSION["pass"]=$pass_word;
			$_SESSION["uid"]=$user_id;
?>

<script type="text/javascript">
					alert("Successfully registered.");
					location="index.php";
				</script>

<?php
			//header ( "location: index.php" );
		}
	}


?>


?>

