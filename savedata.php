<?php

$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$city_here=$_POST['ci'];
$country_here=$_POST['co'];
if(!$first_name && !$last_name)
{
  header("Location: http://localhost/demo/");
}
else {
  // code...
  $conn=mysqli_connect("localhost","root","","mysql");
  $sql="SELECT * FROM student_table1";

  $sql="INSERT INTO student_table1 (f_name,l_name,city,country) VALUES('{$first_name}','{$last_name}','{$city_here}','{$country_here}')";
  $result=mysqli_query($conn,$sql) or die("querry unsuccessful");

  header("Location: http://localhost/demo/");
  mysqli_close($conn);
}



 ?>
