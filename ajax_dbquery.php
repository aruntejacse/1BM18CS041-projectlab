<!DOCTYPE html>
<html>
<body>
<?php
$con= mysqli_connect('localhost','root','') or die(mysql_error()) ;
mysqli_select_db($con,'demo1') or die("cannot select DB");
$q = $_GET["q"];
if($q ==""){
  $querytea2=mysqli_query($con,"SELECT * FROM teacherdem");
  while($row=mysqli_fetch_assoc($querytea2)){
	?><div>Email:<?php echo $row['email'];?><br>Name:<?php
	echo $row['name'];?><br>Interests:<?php
	echo $row['interests'];?>
  <hr>
</div>
<?php
}
}
  ?>
  <?php

if($q != ""){
  $querytea=mysqli_query($con,"SELECT * FROM teacherdem where branch ='".$q."'");
	while($row=mysqli_fetch_assoc($querytea)){
	?><div>Email:<?php echo $row['email'];?><br>Name:<?php
	echo $row['name'];?><br>Interests:<?php
	echo $row['interests'];?>
  <hr>
</div>
	 <?php
}
}
	 ?>

</body>
</html>
