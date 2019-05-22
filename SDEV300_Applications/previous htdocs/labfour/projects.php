<html>
<style>
#base {
   margin: 20%;
   display: inline-block;
   vertical-align: top;
   display: inline-block;
   vertical-align: top;
   background-color: lightblue;
   text-align: center;
   width: 30%;  }
table {
    align: center;
    width: 100%;
    border: 1px solid black;
}
  /* td:first-child, th:first-child {
 border-left: 1px solid black;
}
tr:last-child {
 border-bottom: 1px solid black;
} */
</style>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Projects: First 10 Cars Stolen In 'Gone In 60 Seconds' </title>
</head>
<body>
  <div id="base" name="base2">
    <h1>Projects: First 10 Cars Stolen In 'Gone In 60 Seconds'</h1>


<?php

       # Retrieve Post Data
      $username = $_POST["username"];
      $email = $_POST["emailadd"];
# Set the session information
 session_start();
 if (!isset($_SESSION['appusername'])){
  $_SESSION['appusername'] = $username;
  $_SESSION['appemail'] = $email;
}
 # Display the Session information
 //echo "<h3> Session Data </h3>";
 echo "<h2> Welcome  " . $_SESSION['appusername']. "</h2>";
 echo "<table border='1'>";
 echo "<tr>
        <td>Username </td>
        <td> Email </td>
      </tr>";
echo "<tr><td>" . $_SESSION['appusername'] . "</td>";
echo "<td>" . $_SESSION['appemail'] . "</td>";
 echo "</tr>";
 echo "</table>";
// Provide a button to logout
echo "<br/>";
echo "<form name='logout' method='post' action='logout.php'>";
echo "<input name='logoutbtn' type='submit' value='Logout'>";
echo "</form>";

?>
<table>
<form name="proj" method="post" action="summary.php">
<tr>
  <th>Project</th>
  <th>Percent Complete</th>
  <th>Comments</th>
</tr>

<tr>
    <td>1999 Aston Martin DB7
    </td>
    <td>98%
    </td>
    <td><textarea value="_" name="one" type="text" size="50"></textarea>
    </td>
</tr>

<tr>
  <td>1962 Aston Martin DB1
  </td>
  <td>91%
  </td>
  <td><textarea name="two" type="text" size="50"></textarea>
  </td>
</tr>

<tr>
    <td>1999 Bentley Arnage
    </td>
    <td>89%
    </td>
    <td><textarea name="three" type="text" size="50"></textarea>
    </td>
</tr>

<tr>
    <td>1999 Bentley Azure
    </td>
    <td>76%
    </td>
    <td><textarea name="four" type="text" size="50"></textarea>
    </td>
</tr>

<tr>
    <td>1959 Cadillac El Dorado
    </td>
    <td>64%
    </td>
    <td><textarea name="five" type="text" size="50"></textarea>
    </td>
</tr>

<tr>
    <td>1958 Cadillac El Dorado Brougham
    </td>
    <td>77%
    </td>
    <td><textarea name="six" type="text" size="50"></textarea>
    </td>
</tr>

<tr>
    <td>1999 Cadillac Escalade
    </td>
    <td>50%
    </td>
    <td><textarea name="seven" type="text" size="50"></textarea>
    </td>
</tr>

<tr>
    <td>2000 Cadillac El Dorado STS
    </td>
    <td>45%
    </td>
    <td><textarea name="eight" type="text" size="50"></textarea>
    </td>
</tr>

<tr>
    <td>1957 Chevrolet Bel Air Convertible
    </td>
    <td>21%
    </td>
    <td><textarea name="nine" type="text" size="50"></textarea>
    </td>
</tr>

<tr>
    <td>1969 Chevrolet Camaro Z28
    </td>
    <td>0%
    </td>
    <td><textarea name="ten" type="text" size="50"></textarea>
    </td>
</tr>
<tr>
  <td colspan="2" align="center"><input name="btnsubmit" type="submit" value="SUBMIT"></td>
</tr>
</form>
</table>
</div>
<input type="hidden" name="dateadded" value="<?php time(); ?>">

</body>
</html>
