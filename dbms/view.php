<?php include 'conn.php' ?>
<a href="data1.php">Home</a>
<table border="1px" cellpadding="10px" cellspacing="0px">
<tr>

<th>First Name</th>
<th> Last Name</th>
<th colspan="2">Actions</th>
</tr>
<?php
$query = "SELECT * FROM user";
$data = mysqli_query($conn,$query);
$result = mysqli_num_rows($data);
if($result){
	while($row = mysqli_fetch_array($data)){ ?>
	<tr>
	
	<td><?php echo $row['fname'];?> </td>
	<td><?php echo $row['lname'];?> </td>
	<td><a href="update.php?id=<?php echo $row['Id'];?> ">Edit</a></td>
	<td><a onclick="return confirm('Are you sure you want to delete?')" href="delete.php?id=<?php echo $row['Id'];?> ">Delete</a></td>
	</tr>
	<?php
	}
}
else
{
	?>
	<tr>
	<td>No Record Found</td>
	</tr>
<?php
}
?>
</table>