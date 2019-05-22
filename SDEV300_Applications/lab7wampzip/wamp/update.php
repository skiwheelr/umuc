<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Update Student </title>
</head>
<body>
<?php
session_start();

// Assign post values if exist
//$cusername = "";
$uppassword = "";



$uppassword = $_POST["pwd"];

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

$sql = "UPDATE users SET hashpassword='" .$uppassword . "' WHERE username='" . $_SESSION['appusername'] . "'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    echo "<form name='Return' method='post' action='home.php'> <input name='btndsubmit' type='submit' value='Go Home'>";
} else {
    echo "Error updating record: " . $conn->error;
    echo "<form name='Return' method='post' action='home.php'> <input name='btndsubmit' type='submit' value='Go Home'>";

}

$conn->close();
?>









</body>
</html>
