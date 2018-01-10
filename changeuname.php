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

<script type="text/javascript" src="js/change_uname.js"></script>

<title>Change Username</title>
</head>

	<?php
	$coin = 250;
	session_start ();
	if (isset ( $_SESSION ["log_in"] )) {
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
	}
	?>

<form action="change_uname.php" method="post" name="f3"
		onsubmit="return register()">
	<div class="container">
		<table class="hoverable z-depth-3">
			<tr>
				<td><label id="username">New Username</label><input type="text" name="uname"></td>
			</tr>

			<tr>
				<td>
					<button type="submit" name="signup" id="ch_username"
						class="waves-effect waves-light btn-large">Change Username</button>

				</td>

			</tr>


		</table>
	</div>
	</form>
	<br />

	<div class="footer">
		<div class="page-footer"></div>
	</div>
</body>
</html>

