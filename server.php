<?php include 'connection.php';?>

<?php
if(isset($_POST['submit'])) {
	$name = strip_tags($_POST['name']);
	$secondname = strip_tags($_POST['secondname']);
	$email = strip_tags($_POST['email']);
	$gender = strip_tags($_POST['gender']);
	$course = strip_tags($_POST['course']);
	$description= strip_tags($_POST['description']);
	
	$name = $connect->real_escape_string($name);
	$secondname = $connect->real_escape_string($secondname);
	$email = $connect->real_escape_string($email);
	$gender = $connect->real_escape_string($gender);
	$course = $connect->real_escape_string($course);
	$description = $connect->real_escape_string($description);
	
	
	$check_email = $connect->query("SELECT email FROM user_info WHERE email='$email'");
	$count=$check_email->num_rows;
	
	if ($count==0) {
		
		$query = "INSERT INTO user_info(first_name, last_name, email, gender, course, description) VALUES('$name','$secondname','$email','$gender', '$course', '$description')";

		if ($connect->query($query)) {

			echo "<div style='color:#73AD21;text-align:center; padding: 7px'> Information was submitted successfully!</div>";

		}else {
			echo "<div style='color:red;text-align:center;padding: 7x'>Error occured while submitting your information. Please try again</div>".$connect->connect_errno;
		}
		
	} else {
		
		
		echo "<div style='color:red;text-align:center;padding: 7px'>Sorry email already taken!</div>";
			
	}


	$connect->close();
}
?>
