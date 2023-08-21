<?php include 'conn.php';
$id=$_GET['id']; 
$query = "DELETE FROM user WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data){
	?>
	<script type="text/javascript">
	alert("Data Deleted Successfully");
	window.open("http://localhost/dbms/view.php","_self");
	</script>
	<?php
}
else
{
	?>
	<script type="text/javascript">
	alert("plz try again");
	</script>
	
	<?php
}
?>