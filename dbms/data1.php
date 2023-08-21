<form action="data1.php" method="post">
First Name	<input type="text" name="fname" > <br> <br>

Last Name <input type="text" name="lname" > <br> <br>

<Input type="submit"><button><a href="view.php">view</a></button>
 
</form>

<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "roshni1";



// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

//  Check connection

if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);

}



$fname=$_POST['fname'];

$lname=$_POST['lname'];




$sql = "INSERT INTO user (`id`, `fname`, `lname`) VALUES (NULL, '$fname', '$lname')";



if ($conn->query($sql) === TRUE) {

  echo "New record created successfully";

} else {

  echo "Error: " . $sql . "<br>" . $conn->error;

}

$conn->close();

?>

