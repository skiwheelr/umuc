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


</style>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title> Projects: First 10 Cars Stolen In 'Gone In 60 Seconds': Results </title>
</head>
<body>
  <div id="base" name="base3">
    <h1>Projects: First 10 Cars Stolen In 'Gone In 60 Seconds': Results</h1>
    <h1> Thank You For Your Comments! </h1>


<?php

session_start();
if(isset($_SESSION['appusername']))
{
  #$deit = $_POST["dateadded"];
  $one = $_POST["one"];
  $two = $_POST["two"];
  $three = $_POST["three"];
  $four = $_POST["four"];
  $five = $_POST["five"];
  $six = $_POST["six"];
  $seven = $_POST["seven"];
  $eight = $_POST["eight"];
  $nine = $_POST["nine"];
  $ten = $_POST["ten"];
  $lasttim = time();



    $uno = $_SESSION['one'];
    $dos = $_SESSION['two'];
    $tres = $_SESSION['three'];
    $quattro = $_SESSION['four'];
    $cinco = $_SESSION['five'];
    $seis = $_SESSION['six'];
    $siete = $_SESSION['seven'];
    $ocho = $_SESSION['eight'];
    $nueve = $_SESSION['nine'];
    $diez = $_SESSION['ten'];

    $_SESSION['one'] = $uno . $one;
    $_SESSION['two'] = $two . $dos;
    $_SESSION['three'] = $three . $tres;
    $_SESSION['four'] = $four . $quattro;
    $_SESSION['five'] = $five . $cinco;
    $_SESSION['six'] = $six . $seis;
    $_SESSION['seven'] = $seven . $siete;
    $_SESSION['eight'] = $eight . $ocho;
    $_SESSION['nine'] = $nine . $nueve;
    $_SESSION['ten'] = $ten . $diez;

    $_SESSION['lasttime'] = $lasttim;

    # One dos drei chetili cinque

    // $username = $_SESSION['username'];
    // $email = $_SESSION['appemail'];
    // $one = $_SESSION['one'];
    // $two = $_SESSION['two'];
    // $three = $_SESSION['three'];
    // $four = $_SESSION['four'];
    // $five = $_SESSION['five'];
    // $six = $_SESSION['six'];
    // $seven = $_SESSION['seven'];
    // $eight = $_SESSION['eight'];
    // $nine = $_SESSION['nine'];
    // $ten = $_SESSION['ten'];
}

//session_start();
 //$_SESSION['appusername'] = $username;
 //$_SESSION['appemail'] = $email;
# Display the Session information
echo "<h3> Session Data </h3>";
echo "<table border='1'>";
echo "<tr>
       <td>Username </td>
       <td> Email </td>
     </tr>";
echo "<tr>
<td>" . $_SESSION['appusername'] . "</td>";
echo "<td>" . $_SESSION['appemail']."</td>";
echo "</tr>";
echo "</table>";
?>


<?php
// Provide a button to logout
echo "<br/>";
echo "<form name='logout' method='post' action='logout.php'>";
echo "<input name='logoutbtn' type='submit' value='Logout'>";
echo "</form>";
?>

<table>

  <th>Project</th>
  <th>Percent Complete</th>
  <th>Comments</th>
  <th>Originally Altered</th>
<br/>
<tr>
    <td>1999 Aston Martin DB7
    </td>
    <td>98%
    </td>
    <?php echo "<td><p>" . $_SESSION['one'] . "</p></td>";?>
    <?php echo "<td><p>" . date("Y-m-d-H-i:s",$_SESSION['lasttime']) . "</p></td>"; ?>

</tr>
<br/>

<tr>
  <td>1962 Aston Martin DB1
  </td>
  <td>91%
  </td>
  <?php echo "<td><p>" . $_SESSION['two'] . "</p></td>";?>
  <?php echo "<td><p>" . date("Y-m-d-H-i:s",$_SESSION['lasttime']) . "</p></td>"; ?>

</tr>
<br/>

<tr>
    <td>1999 Bentley Arnage
    </td>
    <td>89%
    </td>
    <?php echo "<td><p>" . $_SESSION['three'] . "</p></td>";?>
    <?php echo "<td><p>" . date("Y-m-d-H-i:s",$_SESSION['lasttime']) . "</p></td>"; ?>

</tr>
<br/>

<tr>
    <td>1999 Bentley Azure
    </td>
    <td>76%
    </td>
    <?php echo "<td><p>" . $_SESSION['four'] . "</p></td>";?>
    <?php echo "<td><p>" . date("Y-m-d-H-i:s",$_SESSION['lasttime']) . "</p></td>"; ?>

</tr>
<br/>

<tr>
    <td>1959 Cadillac El Dorado
    </td>
    <td>64%
    </td>
    <?php echo "<td><p>" . $_SESSION['five'] . "</p></td>";?>
    <?php echo "<td><p>" . date("Y-m-d-H-i:s",$_SESSION['lasttime']) . "</p></td>"; ?>

</tr>
<br/>

<tr>
    <td>1958 Cadillac El Dorado Brougham
    </td>
    <td>77%
    </td>
    <?php echo "<td><p>" . $_SESSION['six'] . "</p></td>";?>
    <?php echo "<td><p>" . date("Y-m-d-H-i:s",$_SESSION['lasttime']) . "</p></td>"; ?>

</tr>
<br/>

<tr>
    <td>1999 Cadillac Escalade
    </td>
    <td>50%
    </td>
    <?php echo "<td><p>" . $_SESSION['seven'] . "</p></td>";?>
    <?php echo "<td><p>" . date("Y-m-d-H-i:s",$_SESSION['lasttime']) . "</p></td>"; ?>

</tr>
<br/>

<tr>
    <td>2000 Cadillac El Dorado STS
    </td>
    <td>45%
    </td>
    <?php echo "<td><p>" . $_SESSION['eight'] . "</p></td>";?>
    <?php echo "<td><p>" . date("Y-m-d-H-i:s",$_SESSION['lasttime']) . "</p></td>"; ?>

</tr>
<br/>

<tr>
    <td>1957 Chevrolet Bel Air Convertible
    </td>
    <td>21%
    </td>
    <?php echo "<td><p>" . $_SESSION['nine'] . "</p></td>";?>
    <?php echo "<td><p>" . date("Y-m-d-H-i:s",$_SESSION['lasttime']) . "</p></td>"; ?>

</tr>
<br/>

<tr>
    <td>1969 Chevrolet Camaro Z28
    </td>
    <td>0%
    </td>
    <?php echo "<td><p>" . $_SESSION['ten'] . "</p></td>";?>
    <?php echo "<td><p>" . date("Y-m-d-H-i:s",$_SESSION['lasttime']) . "</p></td>"; ?>

</tr>

</table>
<?php
// Provide a button to return
echo "<br/>";
echo "<form name='Return' action='login.html'>";
echo "<input name='returnbtn' type='submit' value='Return To Login To Comment'>";
echo "</form>";
?>
</div>
</body>
</html>
