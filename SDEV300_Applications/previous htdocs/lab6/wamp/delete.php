<html>
	<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <title>Delete Student </title>
</head>
<body >

<?php
//require_once('Includes/DBQueries.php');
session_start();

// Check to see if Delete name is provided or in session
$toDelete = "";

//if (isset($_POST["dusername"])) {
//    $toDelete = $_POST["dusername"];}

    $toDelete = $_SESSION['appusername'];
//}
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

// sql to delete a record ---****************************  This infused php might be an issue!

$sql = "DELETE FROM users WHERE username='" . $_SESSION['appusername'] . "'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

    echo "<a href='login.php'> Return to Login.</a>";

?>

</body>
</html>