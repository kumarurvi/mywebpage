<?php
  session_start();
  date_default_timezone_set("Asia/Bangkok");

?>
<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="style.css">
</head>


<header>
	<nav>
	    <img src="logo.jpg" >
		<ul>
		    <li><a href="welcome.php">HOME</a></li>
			<?php
			   if(isset($_SESSION['id'])){
			   echo "<li><a href='includes/logout.php'>LOG OUT</a></li>";		
			}else {
				echo "<li><a href='loginpage.php'>LOG IN</a></li>";
			}
			?>
			<li><a href="signinpage.php">SIGNIN</a></li>
			
		</ul>
	</nav>
</header>

