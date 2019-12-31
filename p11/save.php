<?php
$con=mysqli_connect('localhost','root','','p11');


echo "Show values <br><br>";
$id=$_POST['sid'];
$name=$_POST['sn'];
$age=$_POST['sa'];

echo "ID:".$id."<br>";

echo "Name:".$name."<br>";

echo "Age:".$age;



$sql="insert into student(id,name,age)values('$id','$name','$age')";
mysqli_query($con,$sql);

?>