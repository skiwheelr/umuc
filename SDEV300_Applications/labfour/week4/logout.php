<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <title>Form Login</title>
</head>

<?php
session_start();
unset($_SESSION['appusername']);
unset($_SESSION['appemail']);


// Display the Session information
echo "<h3> Session Data after Logout  </h3>
<table border='1'>
<tr>
        <td>Username </td>
        <td> Email </td>
      </tr>
<tr>
        <td>" . $_SESSION['appusername'] . "</td>" .
        "<td>" . $_SESSION['appemail'] . "</td>
      </tr>     
    </table>";   
 ?>    

</body>
</html>

