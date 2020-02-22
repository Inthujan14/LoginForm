<?php include('server.php'); 
	if(isset($_POST['delete']))
{
	$student_id = $_POST['student_id'];
	$sql="DELETE FROM register WHERE student_id='$student_id'";

	if(mysqli_query($db,$sql)){
		header("Location:http://localhost:8080/Intern1/view.php");
	}
	else{
		echo "Not deleted";
	}
}
?>