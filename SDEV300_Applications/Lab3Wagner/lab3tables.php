
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" > <html>
<head>
<title>Lab 3 Tables In PHP</title>
   </head>

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

   <?php function surface($Re){
     return (4 * 3.14159)* ($Re * $Re);
   } ?>

   <?php function slopey($xe,$me,$be){
     return (($me*$xe)+ $be)*-1;
   } ?>


<div id="base">

   <body>
   <h1> Week 3 PHP and HTML Blending - Assignment_Wagner_Mark </h1>
   <h2>Geometric Information</h2>
  <!-- First part of table -->
  <table border="1">
  <tr>
     <th>Item</th>
     <th>Value</th>
  </tr>
  <tr>
    <td>x</td>
    <td>{2,5,8,10} <?php $x = array(2,5,8,10);?></td>
  </tr>
  <tr>
    <td>m</td>
    <td>-2 <?php $m = -2;?></td>
  </tr>
  <tr>
    <td>b</td>
    <td>0 <?php $b = 0;?></td>
  </tr>
  <tr>
    <td>R</td>
    <td>{2,6,10,100,1000} <?php $R= array(2,6,10,100,1000);?></td>
  </tr>
  <tr>
    <td>v in meters/second</td>
    <td>{10,30,327,1200} <?php $v = array(10,30,327,1200);?></td>
  </tr>
  <tr>
    <td>t in seconds</td>
    <td>{0,.5,1,1.5,2,2.5,3,3.5,4,4.5,5,5.5,6,6.5,7,7.5,8,8.5,9,9.5,10}<?php $t = array(0,.5,1,1.5,2,2.5,3,3.5,4,4.5,5,5.5,6,6.5,7,7.5,8,8.5,9,9.5,10);?></td>
  </tr>
</table>

<h2>Calculate Slope Intercept of Y</h2>
<table border = "1">
  <th> X Factor </th>
  <th> Calculated Y (y=mx+b)</th>
<?php
for ($i=0; $i<count($x);$i++){ ?>
              <tr><td><?php echo $x[$i];?></td>
              <td><?php echo slopey($x[$i],$m,$b);?> </td>
           <?php } ?>
            </tr>
</table>

<h2>Calculate Surface Area Of Sphere</h2>
<table border = "1">
  <th> Radius </th>
  <th> Surface Area (A=4piR^2)</th>
<?php
for ($i=0; $i<count($R);$i++){ ?>
              <tr><td><?php echo $R[$i];?></td>

              <td><?php echo surface($R[$i]);?> </td>
           <?php } ?>
            </tr>
</table>

<h2>Calculate Distance Travelled Per Speed Per Time</h2>
<table border = "1">
  <th> Velocity Used </th>
  <th> Distance Travelled Chart </th>
<?php
for ($l=0; $l<count($v);$l++){ ?>
              <tr><td><?php echo $v[$l];?></td>
              <td><table border = "1">
                  <th> Time Passed </th>
                  <th> Distance Travelled </th>
                <?php
                for ($i=0; $i<count($t);$i++){ ?>
                              <tr><td><?php echo $t[$i];?></td>
                              <td><?php echo $t[$i]*$v[$l];?> </td>
                           <?php } ?>
                            </tr>
                </table>
               </td>
           <?php } ?>
            </tr>
</table>





<!-- New Data -->
<br/><br/><br/><br/><br/><br/>
<?php $original = "To be, or not to be: that is the question:
Whether 'tis nobler in the mind to suffer
The slings and arrows of outrageous fortune,
Or to take arms against a sea of troubles,
And by opposing end them? To die: to sleep;
No more; and by a sleep to say we end
The heart-ache and the thousand natural shocks
That flesh is heir to, 'tis a consummation
Devoutly to be wish'd. To die, to sleep;
To sleep: perchance to dream: ay, there's the rub;
For in that sleep of death what dreams may come
When we have shuffled off this mortal coil,
Must give us pause: there's the respect
That makes calamity of so long life;
For who would bear the whips and scorns of time,
The oppressor's wrong, the proud man's contumely,
The pangs of despised love, the law's delay,
The insolence of office and the spurns
That patient merit of the unworthy takes,
When he himself might his quietus make
With a bare bodkin? who would fardels bear,
To grunt and sweat under a weary life,
But that the dread of something after death,
The undiscover'd country from whose bourn
No traveller returns, puzzles the will
And makes us rather bear those ills we have
Than fly to others that we know not of?
Thus conscience does make cowards of us all;
And thus the native hue of resolution
Is sicklied o'er with the pale cast of thought,
And enterprises of great pith and moment
With this regard their currents turn awry,
And lose the name of action.--Soft you now!
The fair Ophelia! Nymph, in thy orisons
Be all my sins remember'd!";

$quoshuf = str_shuffle($original);
$quouca = ucwords($original); ?>

      <table border="1">
        <tr>
            <th><?php echo $original ?>:</th>
            <th>Modification</th>
        </tr>
        <tr>
            <td><?php echo "Shuffled _String using str_shuffle():"?></td>
            <td><?php echo $quoshuf ?></td>
        </tr>
        <tr>
            <td>All Words Uppercase using ucwords():</td>
            <td><?php echo $quouca ?></td>
        </tr>
      </table>
    </div>
   </body>
 </html>
