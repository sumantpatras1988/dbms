

<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "keyborad";



// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}



$fname=$_POST['fname'];

$lname=$_POST['lname'];



$sql = "INSERT INTO students (`sr`, `fname`, `lname`) VALUES (NULL, '$fname', '$lname')";



if ($conn->query($sql) === TRUE) {

  ?>
  <script type="text/javascript">
  alert("Data added Successfully")
  </script>
  <?php

} else {?>
  <script type="text/javascript">
  alert("please try again")
  </script>
  <?php
}

$conn->close();

?>

