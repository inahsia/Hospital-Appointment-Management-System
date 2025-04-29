<html>
<body>
<?php 
	
		$servername = "localhost";
		$username = "root";
		$password = "";
		$mydb="database1";
		$conn = new mysqli($servername, $username, $password,$mydb);

	
		// Check connection
		if ($conn->connect_error) {
		  die( $conn->connect_error);
		}
		
		
	
	?>
</body>
</html>