<html>
<body>
    <?php
	$conn = mysqli_connect("localhost","root","","iwp");
	if(!$conn)
	{
		die("Connection failed: ".mysqli_connect_error());
	}
    echo("Connected Successfully");
	$user = $_POST["adminid"];
	$pwd = $_POST["password"];
	$sql = "SELECT adminid, password from admin";
	if ($result=mysqli_query($conn,$sql))
  	{
  		while ($row=mysqli_fetch_row($result))
    	{
    		if($user==$row[0] && $pwd==$row[1])
    		{
    			header("Location: admin_view.php");
    			break;
    		}
    	}
  		mysqli_free_result($result);
	}
?>
</body>
</html>