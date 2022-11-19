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
  if($result = mysqli_query($conn,$sql)){
    if(mysqli_num_rows($result)>0){
      $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);}}
  $sql = "DELETE FROM student_table1";
  mysqli_query($conn,$sql);
  $s="ALTER TABLE student_table1 AUTO_INCREMENT=1 ";
  mysqli_query($conn,$s);
  $sql="INSERT INTO student_table1 (f_name,l_name,city,country) VALUES('{$first_name}','{$last_name}','{$city_here}','{$country_here}')";
  $result=mysqli_query($conn,$sql) or die("querry unsuccessful");
  foreach($rows as $row){
    $sql="INSERT INTO student_table1 (f_name,l_name,city,country) VALUES('{$row["f_name"]}','{$row["l_name"]}','{$row["city"]}','{$row["country"]}')";
    mysqli_query($conn,$sql);
  }
  header("Location: http://localhost/demo/");
  mysqli_close($conn);
}



 ?>
