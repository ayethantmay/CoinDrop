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
		<title>Level-8</title>
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
							<a href="#">( Level-8 )</a>
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
	 	$randno=rand(1, 4);
		
		$servername = "localhost:3306";
		$username = "root";
		$password = "";
		$dbname = "coindrop";
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
		
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} else{
			
		
		if(isset($_POST["catbtn"]))
        {
        	$qid=$_POST["qid"];
        	$coinleft=$_POST["coin"];
        } 
        $sql="select qid,categorie,ques,tans,fans from level8 where qid=".$qid;
		$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while ($row=$result->fetch_assoc())
				{
					$ques=$row["ques"];
			
			?>
			<div id="coin-no">
			<table>
			<tr>
				<td>
					<div align="left">
					<img src="images/coin.jpg" id="imgcoin">
					<span id='coin'><?php echo $coinleft;?></span><br/>
			</div>
				</td>
				<td>
					<div align="right">
					<img src="images/clock2.jpg" id="imgclock">
					<span id='time'>30</span>
					</div>
				</td>
			</tr>
			</table>
			</div>
			<div align="right">
				<button id="tsbtn" onclick="nextlevel()" >Timer Stop</button>
			</div>
			
   			<div class="container"> 
    			<table class="hoverable z-depth-3" >
				  <tr>
		            <td align="center">
		            	<?php echo $ques; ?>
		            </td>
		          </tr>		
				  <tr>
		          	<td>
		          		<div>
		          			<?php if($randno==1)
		          		{
		          			?>
		          			<table id="intable">
		          			<tr>
			            	<td>
			            		<button id="fans1"  class="waves-effect waves-light btn-large" onclick="go1()"><?php echo $row["fans"];?></button>
			            	</td>
			            	<td>
		          				<button  class="waves-effect waves-light btn-large" onclick="go()"><?php echo $row["tans"];?> </button>
			            	</td>
			            	</tr>
			            	<tr>
			            	<td>
			            		<img src="images/coin.jpg" id="imgcoin1"><?php echo " ";?><span id='f1'>0</span><br/>
			            	</td>
			            	<td>
			            		<img src="images/coin.jpg" id="imgcoin1"><?php echo " ";?><span id='t'>0</span><br/>
			            	</td>
			            	</tr>
		            		</table>
			          	<?php }
			          	else 
			          	{
			          	?>
			          		<table id="intable">
		          			<tr>
		          			<td>
		          				<button  class="waves-effect waves-light btn-large" onclick="go()"><?php echo $row["tans"];?> </button>
			            	</td>
			            	<td>
			            		<button id="fans1"  class="waves-effect waves-light btn-large" onclick="go1()"><?php echo $row["fans"];?></button>
			            	</td>
			            	</tr>
			            	<tr>
			            	<td>
			            		<img src="images/coin.jpg" id="imgcoin1"><?php echo " ";?><span id='t'>0</span><br/>
			            	</td>
			            	<td>
			            		<img src="images/coin.jpg" id="imgcoin1"><?php echo " ";?><span id='f1'>0</span><br/>
			            	</td>
			            	</tr>
		            		</table>
			          	<?php }?>
		            	</div>
		            </td>
		          </tr>
		<?php 					
					
				}}
		}	
	?>
      </table>
<script type="text/javascript">
var t1=0;t2=0;
var c=<?php echo $coinleft;?>;
var sixtysec = 30;

display = document.querySelector('#coin');
function go() {
	display1 = document.querySelector('#t'); 
	
	if(c>0)
	{
        t1=t1+5;
        c=c-5;
        display1.textContent =   t1;
        display.textContent= c;
	}
	else if(c<=0 && t1>0)
	{	
		t1=t1-5;
		c=c+5;
		display1.textContent =   t1;
        display.textContent= c;
	}
}
function go1()
{
	display2 = document.querySelector('#f1');
	if(c>0)
	{
		t2=t2+5;
		c=c-5;
		display2.textContent =   t2;
	    display.textContent= c;
	}
	else if(c<=0 && t2>0)
	{
		t2=t2-5;
		c=c+5;
		display2.textContent =   t2;
	    display.textContent= c;
	}
}
function startTimer(duration, displayt) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        //minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        //minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        displayt.textContent =   seconds;
		
        if (--timer == 0) {
            
            nextlevel();
        }
    }, 1000);
}

  function nextlevel()
  {
		setInterval(function(){
			displayt = document.querySelector('#time');
			displayt.textContent = "00";
		},0);
		setInterval(function(){
			document.getElementById("fans1").disabled=true;
			displayt = document.querySelector('#time');
			displayt.textContent = "00";
		if(c>0)
		{
		  alert("Money "+c+"  Left!");
		}
		if(t1>0 && t2>0)
		{
				alert("You lost, You placed the coin in all answer!! ");
				window.location="index.php";
		}
		else if(t1>0) {
			setInterval(function(){
			displayt = document.querySelector('#time');
			displayt.textContent = "00";
			},2000);
				alert("You win "+t1+" coins");
				
				document.write("<body>");
				document.write("<form action='congrat.php' method='post'>");
			    document.write("<input type='hidden' name='tcoin' value='"+t1+"'>");
			    document.write("<button type='submit' name='nextbutton' id='btn'>Next Level</button></form></body>");
			    document.getElementById("btn").click();
		}
		else if(t1==0)
		{
				alert("You Lost");
				window.location="index.php";
		 }
	},3000);	
	  
	
  }
window.onload = function () {
    displayt = document.querySelector('#time');
    startTimer(sixtysec, displayt);
}
</script>
</div>
<br />	
<script type="text/javascript">
	
</script>	

<div class="footer">
			<div class="page-footer">
			     
			</div>
	</div>
    </body>
    </html>
