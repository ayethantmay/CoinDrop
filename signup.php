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
<title>Sign Up</title>

<script type="text/javascript" src="js/signup.js"></script>

</head>

<body>

	<div class="header" id="top">
		<nav class="z-depth-2">
		<div class="nav-wrapper">
			<a href="#" class="brand-logo left" id="title">Coin Drop</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li class="waves-effect waves-light"><a href="index.php">Home</a></li>
				<li class="waves-effect waves-light"><a href="aboutgame.php">About Game</a></li>

			</ul>
		</div>
		</nav>
	</div>


	<form action="sign_up.php" method="post" name="f1" onsubmit="return register()">
	<div class="container">
		<table class="hoverable z-depth-3">
			<tr>
				<td><label id="username">Username</label><input type="text" name="name"></td>
			</tr>
			<tr>
				<td><label id="semail">Email</label><input type="text" name="email"></td>
			</tr>

			<tr>
				<td><label id="spassword">Password</label><input type="password" name="pass"></td>
			</tr>

			<tr>
				<td><label id="repwd">Re-enter Password</label><input type="password" name="repass"></td>
			</tr>

			<tr>
				<td>
					<button type="submit" name="signup" id="signupbtn"
						class="waves-effect waves-light btn-large">Sign Up</button>

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

