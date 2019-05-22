<html>
	<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">   
   <title>Create Student </title>
</head>
<body>


<?php   	

//require_once('Includes/DBQueries.php');
//require_once('Includes/DBClasses.php');


    // Assign post values if exist
    $cusername = "";
    $cpassword = "";

    if (isset($_POST["cusername"])){
        $cusername = $_POST["cusername"];}
    if (isset($_POST["cpassword"])){
        $cpassword = $_POST["cpassword"];}

?>

<?php
$servername = "localhost";
$username = "wamp_user";
$password = "user4wamp";
$dbname = "wamp";


//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}

if (preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $cpassword)) {


        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            // prepare and bind
            $stmt = $conn->prepare("INSERT INTO users (username, hashpassword) VALUES (:usernam,:passwrd)");
            //$stmt->bind_param("ss", $cusername, $cpassword);
            $stmt->bindParam(':usernam', $cusername0);
            $stmt->bindParam(':passwrd', $cpassword0);

            $cusername0 = $cusername;
            $cpassword0 = $cpassword;
            $stmt->execute();



            $sql = "INSERT INTO users (username,hashpassword)
        VALUES ('$cusername','$cpassword');";

            echo "New records created successfully";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;

         } else
             { echo "Password Insufficient Now"; }


//if ($conn->multi_query($sql) === TRUE) {
//    echo "New records created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}
//
//$conn->close();

?>
<form name='logout' method='post' action='login.php'>
    <input name='btnsubmit' type='submit' value='Logout'>

    <?php
//function validate_form(){
//
//
//  $student = new StudentClass($cusername,$cpassword);
//  	$count = countStudent($cusername);
//
//
//  	// Check for accounts that already exist and Do insert
//  	if ($count==0)
//  	{
//  		$res = insertStudent($cusername);
//  		if ($res) {
//  		    echo "<h3>$firstname $lastname has been added as a student to UMUC!</h3> ";
//  		     echo "<p></p>";
//  		     echo "<a href='login.php'> Return to Student App.</a>";
//
//  	}
//  	else
//  	{
//  		echo "<h3>A student account with that PSusername already exists.</h3> ";
//  		 echo "<p></p>";
//  		 echo "<a href='login.php'> Return to Student App.</a>";
//  	}
//  }
// 	?>

</body>
</html>