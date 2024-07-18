<!-- <html>
<body><?php
	$conn = new mysqli("localhost","root","", "iwp");
	if($conn->connect_error)
	{
		die("Connection failed: ".$conn->connect_error);
	}
	$phone = $_POST["phone"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	$email = $_POST["email"];
	$idproof = $_POST["idproof"];
	$dob = $_POST["dob"];
	$sql = "INSERT INTO user_login(phone, password, name, email, idproof, dob) VALUES('$phone', '$password', '$name', '$email', '$idproof', '$dob')";
	if($conn->query($sql)==TRUE)
	{
		header("Location: user_created.php");
	}
	else
	{
		header("Location: user_not_created.php");
	}
?>
</body>
</html> -->

<html>
<body>
<?php
// Establish connection
$conn = mysqli_connect("localhost", "root", "sneha", "iwp");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form data
$phone = mysqli_real_escape_string($conn, $_POST["phone"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);
$name = mysqli_real_escape_string($conn, $_POST["name"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$idproof = mysqli_real_escape_string($conn, $_POST["idproof"]);
$dob = mysqli_real_escape_string($conn, $_POST["dob"]);

// SQL query to insert data into table
$sql = "INSERT INTO user_login (phone, password, name, email, idproof, dob) 
        VALUES ('$phone', '$password', '$name', '$email', '$idproof', '$dob')";

// Execute SQL query
if (mysqli_query($conn, $sql)) {
    // If successful, redirect to user_created.php
    header("Location: user_created.php");
    exit();
} else {
    // If unsuccessful, redirect to user_not_created.php
    header("Location: user_not_created.php");
    exit();
}

// Close connection
mysqli_close($conn);
?>
</body>
</html>
