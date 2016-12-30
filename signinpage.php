<?php
 include 'header.php';
  ?>
<title> Sign In</title>
<?php
			   if(isset($_SESSION['id'])){
			   echo "You are already LoggedIn!";	
			}else {
				echo "<form action='includes/signin.php' method='post'>
                      <table width='200' border='1'>
                       <tr>
                       <th scope='col' colspan='2'>Sign In</th>
                       </tr>
                       <tr>
                       <td width='99'>Name</td>
                       <td width='166'><input name='name' type='text' /></td>
                       </tr>
                       <tr>
                       <td>E-mail</td>
                       <td><input name='email' type='email' /></td>
                       </tr>
                       <tr>
                       <td>User Name</td>
                       <td><input type='text' name='username'></td>
                       </tr>
                       <tr>
                       <td>Password</td>
                       <td><input name='password' type='password' /></td>
                       </tr>
                       <tr>
                       <td colspan='2'><center><botton><input name='Reset' type='reset'><input name='Submit' type='submit'></button></center> 
                       </td>
                       </tr>
                       </table>
                       </form>";	
			}
?>

<?php
 include 'footer.php';
?>
