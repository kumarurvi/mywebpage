<?php
  session_start();

?>

<!DOCTYPE html >
<?php
 include 'header.php';
  ?>


<title>Log In</title>
</head>

<body>
   <div>
<?php
         if(isset($_SESSION['id'])){
         echo "YOU ARE LOGGED IN";  
      }else {
        echo "<form action='includes/login.php' method='post'>
              <table width='257' border='1'>
              <tr>
              <th scope='col' colspan='2'>Log In</th>
              </tr>
              <tr>
              <td width='82'>User Name</td>
              <td width='159'><input type='text' name='username'></td>
              </tr>
              <tr>
              <td>Password</td>
              <td><input name='password' type='password' /></td>
              </tr>
              <tr>
              <td colspan='2'><center><input name='Reset' type='reset'><input name='LoginSubmit' type='submit'></center></td>
              \</tr>
              </table>
              </form>
              <p> Not Registered? <a href='signinpage.php' title='Sign In' target='_self'>Sign In </a></p>"; 
      }
      ?>
   </div>
<?php
 include 'footer.php';
?>
