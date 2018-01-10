<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coindrop";

$conn = new mysqli ( $servername, $username, $password, $dbname );

if ($conn->connect_error) {
	die ( "Connection failed: " . $conn->connect_error );
}

session_start ();

if (isset ( $_SESSION ["log_in"] )) {

	$sql1 = "SELECT user_id,user_name,password from login_signup";
	$result1 = $conn->query ( $sql1 );

	if ($result1->num_rows >= 0) {

		$temp = 'f';

		while ( $row = $result1->fetch_assoc () ) {

			if ($_SESSION ["pass"] == $_POST ["cpw"] && $_SESSION ["uid"] == $row ["user_id"]) {
				$temp = 't';
				$sql = "UPDATE login_signup SET password='" . $_POST ["npw"] . "' WHERE user_id=" . $_SESSION ["uid"];
				$result = $conn->query ( $sql );

				$_SESSION ["pass"] = $_POST ["npw"];
				?>
							<script type="text/javascript">
								alert("Your password is changed");
								location="user_info.php";
							</script>
				<?php
				// header("location: user_info.php");
			}
		}
			if ($temp == 'f') {
				?>
<script type="text/javascript">
					alert("Your current password is incorrect.");
					location="changepw.php";
				</script>
<?php
			}
		}
	}


?>