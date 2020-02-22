<?php include('server.php'); 

if (isset($_POST['newupdate'])) {

	$student_id = $_POST['student_id'];
	$student_name =  $_POST['student_name'];
	$age =  $_POST['age'];
	$stream =  $_POST['stream'];
	$school =  $_POST['school'];
	$phonenumber =  $_POST['phonenumber'];

	$sql="UPDATE register SET student_name='$student_name', age='$age', stream='$stream', school='$school', phonenumber='$phonenumber' WHERE student_id=$student_id";
	if(mysqli_query($db,$sql))
	{
		header("Location:http://localhost:8080/Intern1/view.php");
	}
	else
	{
		echo "Update failed";
	}
}
?>