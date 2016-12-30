<?php

    $sql = "SELECT * FROM db";
    $result= mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
	    while ($row = mysqli_fetch_assoc($result)) {    	 
	    	 $id = $row['id'];
	    	 $sqlimg = "SELECT * FROM profileimg WHERE userid='$id'";
	    	 $resultimg= mysqli_query($con,$sqlimg);
	    	 if ($rowimg = mysqli_fetch_assoc($resultimg)) {
	    		echo "<div class='user-container'>";
	    		if ($rowimg['status'] == 0) {
	    		   	$profileimg ='uploads/profile'.$id.'.jpg?'.mt_rand();
	    		   	echo "<a href='uploadpage.php'> CHANGE IMAGE</a>";
	    		} elseif ($rowimg['status'] == 1) {
	    		   	 $profileimg ='uploads/profiledefault.jpg';
	    		  	 echo "<a href='uploadpage.php'> Upload IMAGE</a>";
	    		}
	    		echo "<img src= $profileimg >";
	    		echo "<p>".$row['username']."</p>";
	    		echo "</div> <br>";
	    	 }
         } 
    }