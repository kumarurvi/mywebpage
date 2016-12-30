<?php
  include_once 'dbh.php';
  include_once 'imgdbh.php';
?>


<?php
 include 'header.php';
  ?>


<div>
<form action="upload.php" method="POST" enctype="multipart/form-data">
   <input type="file" name="file">
   <br>
   <button type="submit" name="submit"> UPLOAD </button>
</div>
 
	
</form>
<?php
 include 'footer.php';
?>
