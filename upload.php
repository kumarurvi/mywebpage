
<?php
 session_start();
 include_once 'imgdbh.php';
 $id = $_SESSION['id'];
   if (isset($_POST['submit'])) {
  	$file= $_FILES['file'];
  	$filename= $_FILES['file']['name'];
  	$filetmpname= $_FILES['file']['tmp_name'];
  	$filesize= $_FILES['file']['size'];
  	$filerror= $_FILES['file']['error'];
  	$filetype= $_FILES['file']['type'];

  	$fileext= explode('.', $filename);
  	$fileactualext = strtolower(end($fileext));
  	$allowed = array('jpg', 'jpeg', 'png', 'pdf');

  	if (in_array($fileactualext, $allowed)) {
  		if ($filerror==0) {
  			if ($filesize < 1000000) {
  				$filenamenew = "profile".$id.".". $fileactualext ;
  				$filedestination = 'uploads/'. $filenamenew;
  				move_uploaded_file($filetmpname, $filedestination);
  				$sql = "UPDATE profileimg SET status = 0 WHERE userid='$id'; ";
  				$result=mysqli_query($con, $sql);
  			} else { 
                echo "Your file was too big!";
  			}
  		} else {
  			echo "There was an error uploading your file";
  	     }
  	} else {
  		echo "You cannot upload file of this type!";

  	}

  }
  header("Location: userhome.php");