
<?php
 include_once 'dbh.php';
 include 'header.php';
 include_once 'profileimg.php';
 include 'comment.php';

echo "<title>User Home Page</title>
      <body>
	  <h1>Hi " .$row['username'] . "</h1>
 	  Your Feeds ".getcomment($con). " <br>
 	     <form method='POST' action='".setComment($con)."''>
 			<input type='hidden' name='userid' >
 			<input type='hidden' name='date' value='".date('Y-m-d H-i-s'). "' >
 			<textarea name='message'></textarea>
            <button name='commentSubmit' type='submit'> Comment</button>
 		</form>
 	   </body>";
?>

<?php
 include 'footer.php';
 ?>