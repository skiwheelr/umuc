<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <title>Logout</title>
</head>
<body>
<?php
session_start();
unset($_SESSION['appusername']);
unset($_SESSION['appemail']);
unset($_SESSION['one']);
unset($_SESSION['two']);
unset($_SESSION['three']);
unset($_SESSION['four']);
unset($_SESSION['five']);
unset($_SESSION['six']);
unset($_SESSION['seven']);
unset($_SESSION['eight']);
unset($_SESSION['nine']);
unset($_SESSION['ten']);

header("Location: login.html")
?>

</body>
</html>
