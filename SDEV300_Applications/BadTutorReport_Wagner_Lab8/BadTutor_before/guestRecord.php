
<html>
	<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="tutors.css">   
   <title>Delete Tutor Session</title>
</head>
<body > 

<?php   
	
	
	  // Show the page header
		include('Includes/Header.php');	
		require_once('Includes/Utils.php');		
		require_once('Includes/SQLFunctions.php');		

	if( isset( $_POST[ 'Guest' ] ) ) {
	
	
		// Get input
		$message = trim( $_POST[ 'Message' ] );
		$gname    = trim( $_POST[ 'guestname' ] );
		
		$message = stripslashes( $message );
	$gname = stripslashes( $gname );
	echo "<p> </p>";
	echo "Processing the Guest comments for " . $gname ;
	
	// Call function to insert data
	$success = insertGuest($gname,$message);
	echo "<p> </p>";
	echo "Successfully entered the data " .$success;
	
	}



?>