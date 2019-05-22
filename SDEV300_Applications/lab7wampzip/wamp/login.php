<html>
	<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
   <title>Student Database App </title>
</head>
<body>

<?php
session_start();
unset($_SESSION['appusername']);
?>
	<!-- A Landing Page for the Student WAMP app -->
<h1> Welcome to User Login </h1>
<h3> Please Login</h3>
<table border="1">
  <form name="main" method="post" action="home.php">
    <tr>
      <td>Username:</td>
      <td><input name="username" type="text" size="50"></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input name="pwd" type="text" size="50"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input name="btnsubmit" type="submit" value="Submit"></td>
    </tr>
  </form>
</table>

    <table border="1">
      <form name="main" method="post" action="register.php">
        <tr>
          <td>Username:</td>
          <td><input name="cusername" type="text" size="50"></td>
        </tr>
        <th>Password must be 8-12 Characters, include one upper and lowercase letter, one number, and one symbol.</th>
        <tr>
          <td>Password:</td>
          <td><input name="cpassword" type="text" size="50"></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input name="btnsubmit" type="submit" value="Register"></td>
        </tr>
      </form>
    </table>


</body>
</html>