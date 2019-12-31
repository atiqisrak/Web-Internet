<?php
$con=mysqli_connect('localhost','root','','p11');

echo "Student Information";
echo "</br>";

$sql="select * FROM student"; 
$res=mysqli_query($con,$sql);
?>


<html>
<body>

<table border="1">
     <tr>
	<th> Student ID </th>
	<td ><b> Name </b></td>
	<td><b> Age </b></td>
        <td> <b> Action </b></td>
     </tr>


<?php
while($row=mysqli_fetch_assoc($res)) 
 										
{

?>

 <tr>



<td > <?php echo $row["id"]; ?> </td>

<td> <?php echo $row["name"]; ?> </td>

<td> <?php echo $row["age"]; ?> </td>

<td> <?php echo $row["action"]; ?> </td>
 
 </tr>

<?php
       
}



?>

</table>
</body>
</html>