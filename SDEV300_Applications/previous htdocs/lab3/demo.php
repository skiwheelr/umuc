<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" > <html>
<head>
<title>PHP Math Discussion Wagner, Mark</title>
   </head>

   <?php
error_reporting(0);
$gs = $_POST['gs'];


 if ($_POST['clear'])
{
 $gs="";
}
 if ($_POST['send'])
 {
$fpm = ($gs*10)/2;
	}
?>

   <!-- CSS -->
   <style>
   #base {
      margin: 10%;
      display: inline-block;
      vertical-align: top;
      display: inline-block;
      vertical-align: top;
      background-color: lightblue;
      text-align: center;
      width: 50%;   }
   table {
       align: center;
       width: 100%; }
   </style>
      <div id="base">
        <body>
          <h1> Avionics in PHP </h1>
          <p> Pilots need to land planes. They sometimes use a device called a VASI indicator to determine how fast their slope coming in should be. Too quick a descent and they will hit the ground. To accurately determine best descent speed for your Vertical Speed Indicator, you take your GroundSpeed, multiply by 10, and divide by 2. This number is your desired descent in Feet Per Minute.</p>
          <br/>
          <p> For example, you are flying at 50 Knots, Ground speed, you would want to descend at 250 FPM or 250/5280 mph down! </p>
<form action = "" method = "POST">

<h2> Enter your Ground Speed indicated on your Garmin </h2>
<input type="text" name="gs" id="gs" value="">
<?php $fpm = ($gs*10)/2; ?>
<br/><br/>

<table border="1">
  <tr>
<th>Desired Descent FPM:  </th>
<th>Desired Descent statuteMPH:  </th>
<th>Desired Descent nauticalMPH:  </th>
</tr>
<td><?php echo $fpm?></td>
<td><?php echo $fpm*60/5280;?></td>
<th><?php echo $fpm*60/6075.12;?></td>
<tr>

</tr>
<input type="submit" name="send" value="Click to Submit"/>
<input type="reset" name="clear" value="Reset"/>
<br/>
<br/>
</form>

        </body>
      </div>
 </html>
