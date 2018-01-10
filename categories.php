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
	?>

	<body>

		<div class="header"id="top">
			<nav class="z-depth-2">
				<div class="nav-wrapper">
				   <a href="#" class="brand-logo left" id="title">Coin Drop</a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li class="waves-effect waves-light">
							<a href="#">( Level-1 )</a>
						</li>
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
			<div id="coin-no" align="right">

			</div>
	<?php
	} 
	else 
	{
	?>
			<script type="text/javascript">
				alert("You must Login First!");
				window.location="login.php";
			</script>
	<?php 
		}
	if(isset($_POST["startbtn"]))
	{
		$servername = "localhost:3306";
		$username = "root";
		$password = "";
		$dbname = "coindrop";
			
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} else{
			
			$one=rand(1,4);
			$two=rand(6,9);
			$sql="select qid,categorie from level1 where qid=".$one;
			$sql2="select qid,categorie from level1 where qid=".$two;
			$result = $conn->query($sql);
			$result2 = $conn->query($sql2);
	?>
	
			<div id="coin-no" align="right">
				<img src="images/coin.jpg" id="imgcoin">
				250<br>
			</div>
			<!--  <div align="right">( Level-1 )</div>-->
   		<div class="container"> 
    	<table class="hoverable z-depth-3" >
        <?php 
			if ($result->num_rows > 0) {
				while ($row=$result->fetch_assoc())
				{
					?>
						
				  <tr id="btncategories">
		            <td align="center">
		            <form action="level1.php" method="post">
		            	<input type="hidden"  name="qid" value='<?php echo $one; ?>'>
		            	<button type="submit" name="catbtn" class="waves-effect waves-light btn-large" ><?php echo $row["categorie"]; ?></button>
		        	</form>
		            </td>
		          </tr>
				<?php 					
					}
			}
			if ($result2->num_rows > 0) {
				while ($row=$result2->fetch_assoc())
					{?>
					
		   <tr id="btncategories">
	       	<td>
           	<form action="level1.php" method="post">
            	<input type="hidden"  name="qid" value='<?php echo $two;?>'>
            	<button type="submit" name="catbtn" class="waves-effect waves-light btn-large" ><?php echo $row["categorie"]; ?></button>
        	</form>
		    </td>
       </tr>
		<?php 					
					}
				}
			}
	}
	?>
         
         
      </table>
    
</div>
<br />		

	<div class="footer">
			<div class="page-footer">
			     
			</div>
	</div>
    </body>
    </html>

