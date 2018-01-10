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
		<title>About Game</title>
	</head>

	<?php
			session_start();
			if (isset($_SESSION["log_in"])) {
	?>

	<body>

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
    	<table class="hoverable z-depth-3"  >
    	
         	 	<h3 align="center" id="rule">Rules of Coin Drop</h3>
         	 <p>
         	 1. You have 50 bundles of 5 coins; total 250 coins at the start.</br>
2. You must risk the entire amount on a series of eight multiple-choice questions.</br>
3. For each question, the contestants choose one of two categories.</br>
4. Then indicate which answer(s) you wish to risk your coins by moving the bundles of coins onto a row of &nbsp;&nbsp;&nbsp;&nbsp;answers.</br>
5. The coins corresponding to the worng answers are lost.</br>
6. You have to continue the game with the next question, keeping the coins you had placed on the right answer.</br>
7. The seventh and final question has only two answer choices, forcing you to put all yourremaining coinson one &nbsp;&nbsp;&nbsp;&nbsp;drop. </br>
8. If you answer correctly, you win the money; if not, youleave with nothing. </br>
9. In addition, if you lose all of your coins before reaching the final question, the game ends and you leave with &nbsp;&nbsp;&nbsp;&nbsp;nothing.</br>
         	 </p>
         		<table border="1">
         			<tr align="center">
         				<td>Questions</td>
         				<td>Answer Choices</td>
         				<td>Time limit</td>
         			</tr>
         			<tr align="center">
         				<td>1-4</td>
         				<td>3 out of 4</td>
         				<td>60 seconds</td>
         			</tr>
         			<tr align="center">
         				<td>5-7</td>
         				<td>2 out of 3</td>
         				<td>60 seconds</td>
         			</tr>
         			<tr align="center">
         				<td>8</td>
         				<td>1 out of 2</td>
         				<td>60 seconds</td>
         			</tr>
         			<tr align="center">
         				<td> </td>
         				<td><form align="center">
         		</br></br><a href="index.php" class="waves-effect waves-light btn-large" >Let's Play</a>
         		</form></td>
         				<td> </td>
         			</tr>
         		</table>
       	
      </table>
    
</div>
<br />		

	<div class="footer">
			<div class="page-footer">
			     
			</div>
	</div>
    </body>
    </html>

         