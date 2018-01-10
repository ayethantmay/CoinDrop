<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet"type="text/css"href="materialize/css/materialize.css"media="projection,screen" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/allcss.css" />
		<title>Start</title>
	</head>

	<?php
			session_start();
			if (isset($_SESSION["log_in"])) {
	?>

	<body>

		<div class="header" id="top">
			<nav class="z-depth-2">
				<div class="nav-wrapper">
				   <a href="#" class="brand-logo left" id="title">Coin Drop</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li class="waves-effect waves-light">
							<a href="index.php">Home</a>
						</li>
						<li class="waves-effect waves-light">
							<a href="aboutgame.php">About Game</a>
						</li>

						<li class="waves-effect waves-light">
							<a href="user_info.php"><?php echo $_SESSION["uname"]?></a>
						</li>

					</ul>
				</div>
			</nav>
		</div>
			
			<?php
			} else {
	?>
	<div class="header"id="top">
			<nav class="z-depth-2">
				<div class="nav-wrapper">
				   <a href="#" class="brand-logo left" id="title">Coin Drop</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li class="waves-effect waves-light">
							<a href="index.php">Home</a>
						</li>
						<li class="waves-effect waves-light">
							<a href="aboutgame.php">About Game</a>
						</li>

						<li class="waves-effect waves-light">
							<a href="login.php">Log In/Sign Up</a>
						</li>

					</ul>
				</div>
			</nav>
		</div>
			
	<?php
			}
	?>

   		<div class="container">
    	<table class="hoverable z-depth-3" >


		  <tr id="btncategories">
            <td align="center">
            <form action="categories.php" method="post">
            	
            	<button type="submit" name="startbtn"  id="start" class="waves-effect waves-light btn-large" >Start</button>
        	</form>
            </td>
          </tr>


      </table>

</div>
<br />

	<div class="footer">
			<div class="page-footer">

			</div>
	</div>
    </body>
    </html>

