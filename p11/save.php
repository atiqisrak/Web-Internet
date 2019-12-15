<?php  
$con=mysqli_connect('localhost','root','','p11');

echo "ID: ";
$id=$_POST['sid'];
echo $id;

echo "Name: ";
$name=$_POST['sn'];
echo $name;

echo "Age: ";
$age=$_POST['sa'];
echo $age;

$sql="insert into student(id,name,age)values('$id','$name','$age')";
mysqli_query($con,$sql);
?>