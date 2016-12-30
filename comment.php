<?php
  function setComment($con) {
  	if (isset($_POST['commenySubmit'])) {
  		$userid = $_POST['userid'];
  		$date = $_POST['date'];  		
  		$message = $_POST['message'];

  		$sql = "INSERT INTO comments (userid,date, message) VALUES ('$userid','$date' '$message') ";
  		$result = mysqli_query($con,$sql);
  	 }
  }

 function getcomment($con) {
 	$sql = " SELECT * FROM comments";
 	$result = mysqli_query($con,$sql);
 	while ( $row = mysqli_fetch_assoc($result)) {
      echo "<div class='comment-box'><p>";
      echo $row['userid']."<br>";
      echo $row['date']."<br>";
      echo nl2br($row['message'])."<br><br>";
      echo "</p></div>";
      	}

 }