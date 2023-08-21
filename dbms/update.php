<?php include 'conn.php';
$id=$_GET['id'];
$select = "SELECT * FROM user WHERE id='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);
?>
<form action="" method="POST">
First Name	<input value="<?php echo $row['fname']?>" type="text" name="fname" > <br> <br>

Last Name <input value="<?php echo $row['lname']?>" type="text" name="lname "> <br> <br>

<input type="Submit" name="Update_btn" value="update" ><button><a href="view.php">Back</a></button>
 
</form> 
<?php
if(isset($_POST['Update_btn'])) 
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$update = "UPDATE user SET fname='$fname',lname='$lname' WHERE Id='$id'";
$data=mysqli_query($conn,$update);
if ($data) {
?>
  <script type="text/javascript">
  alert("Data updated Successfully")
  window.open("http://localhost/dbms/view.php","_self");
  </script>
  <?php

} else {?>
  <script type="text/javascript">
  alert("please try again")
  </script>
  <?php
}
$conn->close();
}

?>