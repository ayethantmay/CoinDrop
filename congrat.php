<?php 

?>
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
		<title>Categories</title>
	</head>

	<?php
			session_start();
			if (isset($_SESSION["log_in"])) {
			if(isset($_POST["nextbutton"]))
			{
				$leftcoin=$_POST["tcoin"];
				$servername = "localhost:3306";
				$username = "root";
				$password = "";
				$dbname = "coindrop";
					
				$conn = new mysqli($servername, $username, $password, $dbname);
			
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} else{
				$sql1="select totalcoin from login_signup where user_id=".$_SESSION["uid"];
				$result=$conn->query($sql1);
				if($result->num_rows>0)
				{
					while ($row=$result->fetch_assoc())
					{
						if($row["totalcoin"]==NULL)
						{
							$totalcoin=$leftcoin;
						}
						else {
							$totalcoin=$leftcoin+$row["totalcoin"];
						}
					}
				}
					
				$sql2="UPDATE login_signup SET totalcoin=".$totalcoin." where user_id=".$_SESSION["uid"];
				$conn->query($sql2);
			
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
					}
				}
			}
	?>

   		<div class="container">
    	<table class="hoverable z-depth-3" >
			<tr>
			<td><p>Congratulation You Win '<?php echo $leftcoin;?>' coins.</p></td>
			</tr>

		  <tr id="btncategories">
            <td align="center">
            <form action="index.php" method="post">
            	
            	<button type="submit" name="startbtn"  id="congrat" class="waves-effect waves-light btn-large" >Play Again</button>
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


