<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"
	href="materialize/css/materialize.css" media="projection,screen" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/allcss.css" />
<title>User Information</title>
</head>

	<?php
	session_start ();
	if (isset ( $_SESSION ["log_in"] )) {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "coindrop";

		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql="SELECT totalcoin from login_signup where user_id=".$_SESSION["uid"];
		$result=$conn->query($sql);

		if($result->num_rows>0)
		{
			$temp="f";

			while ($row=$result->fetch_assoc())
			{
				$totalcoin=$row["totalcoin"];
			}
		}
		?>

	<body>

	<div class="header" id="top">
		<nav class="z-depth-2">
		<div class="nav-wrapper">
			<a href="#" class="brand-logo left" id="title">Coin Drop</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li class="waves-effect waves-light"><a href="index.php">Home</a>
				</li>
				<li class="waves-effect waves-light"><a href="log_out.php">Log Out</a>
				</li>

			</ul>
		</div>
		</nav>
	</div>
	<div id="coin-no" align="right"></div>

			<?php
	} else {
		?>
	<div class="header" id="top">
		<nav class="z-depth-2">
		<div class="nav-wrapper">
			<a href="#" class="brand-logo left" id="title">Coin Drop</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">

				<li class="waves-effect waves-light"><a href="aboutgame.html">About
						Game</a></li>

				<li class="waves-effect waves-light"><a href="login.php">Log In</a>
				</li>

			</ul>
		</div>
		</nav>
	</div>
	<div id="coin-no" align="right"></div>

	<?php
	}
	?>

	<div class="container">
		<table class="hoverable z-depth-3">
		<tr>
			<td><label>Username</label></td>
			<td><label><?php echo $_SESSION["uname"];?></label></td>
		</tr>

		<tr>
			<td><label>Email</label></td>
			<td><label><?php echo $_SESSION["email"]?></label></td>
		</tr>
		<tr>
			<td><label>Total coins you have:</label></td>
			<td><img src="images/coin.jpg" id="imgcoinuf"><label>
			<?php if($totalcoin==null){ echo "00";}else {echo $totalcoin;}?></label></td>
		</tr>
		<tr>
			<td colspan="2"><a href="changeuname.php" class="waves-effect waves-light btn-large">Change Username</a></td>

		</tr>

		<tr>
			<td colspan="2"><a href="changepw.php" class="waves-effect waves-light btn-large" id="chpwd">Change Password</a></td>

		</tr>
	</table>
</div>
	<br />

	<div class="footer">
		<div class="page-footer"></div>
	</div>
</body>
</html>

