<?php
	$Name = $_POST['Name'];
	$lastName = $_POST['email'];
	$date = $_POST['date'];
	$gender = $_POST['gender'];
	$country = $_POST['country'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Name, email, date, gender, country) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $Name, $email, $date, $gender, $country);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>