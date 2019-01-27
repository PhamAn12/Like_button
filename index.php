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
	$query = "select * from articles";
	$result = mysqli_query($conn,$query);

	
	mysqli_close($conn);
	$abc = "jdjdjdj";
	require "trangchu.php";
 ?>