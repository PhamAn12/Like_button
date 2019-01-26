<?php 
	$servername = "localhost";
	$database = "like_button";
	$username = "root";
	$password = "";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	// Câu SQL lấy danh sách bài viết
	$sql = "SELECT * FROM articles";
	$result = mysqli_query($conn,$sql);

	while($row = mysqli_fetch_array($result)) {
		echo $row['id'];
		echo $row['title'].'<br>';
	}

	mysqli_close($conn);
 ?>