<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
    <title>User Authenticate </title>
</head>
<body>

<?php
// Retrieve Post Data
$usernamer = "";
$pwd = "";


$usernamer = $_POST["username"];
$pwd = $_POST["pwd"];
?>


<?php
$servername = "localhost";
$username = "wamp_user";
$password = "user4wamp";
$dbname = "wamp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username FROM users";
$result = $conn->query($sql);

echo "<h3>Users:</h3>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "UN: " . $row["username"]. "<br>";
    }
} else {
    echo "0 results";
}


//verify username and set session variable
$swl = "SELECT hashpassword from users where username='" . $username . "'";
$result2 = $conn->query($swl);

if($result2 = $pwd) {

    session_start();
    $_SESSION['appusername'] = $usernamer;
    echo "<h1> Welcome " . $_SESSION['appusername'] . "</h1>";

} else {
    echo "Password Incorrect";

}

$conn->close();
?>
<br/><br/>

<?php


//update segment
echo "<form name='updatepwd' method='post' action='update.php'>
<table border='2px'>
<!-- <tr>
      <td>Username:</td>
      <td><input name=\"username\" type=\"text\" size=\"50\"></td>
    </tr> -->
    
    <tr>
      <td>Password:</td>
      <td><input name=\"pwd\" type=\"text\" size=\"50\"></td>
    </tr>
    <tr>
    <td></td><td>
    <input name= 'btnupd' type='submit' value='Update Password'> </form>
    </td>
</tr>
<tr>
<td>


<!-- delete segment -->
<form name='delete' method='post' action='delete.php'> 

<!-- <tr>
      <td>Username:</td>
      <td><input name=\"dusername\" type=\"text\" size=\"50\"></td>
    </tr>
   <tr>
   
   <td></td> -->
   <td>
<input name='dbtnsubmit' type='submit' value='Delete Account'> 
    </td></tr>
</form>



<!-- logout segment -->
</td></tr>
<tr><td></td><td><br/>
<form name='logout' method='post' action='login.php'> 
<input name='btnsubmit' type='submit' value='Logout'> 
</form>

</td>
</tr>
</table>";

?>



</body>
</html>
