<?php include('server.php'); 
 ?>


<!DOCTYPE html>
<html>
<head>
<title>Update</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<body>

<?php
if (isset($_POST['update'])) {

	$student_id = $_POST['student_id'];
	$student_name =  $_POST['student_name'];
	$age =  $_POST['age'];
	$stream =  $_POST['stream'];
	$school =  $_POST['school'];
	$phonenumber =  $_POST['phonenumber'];

	//mysqli_query($db, "UPDATE register SET student_name='$student_name', age='$age', stream='$stream', school='$school', phonenumber='$phonenumber' WHERE student_id=$student_id");
}
?>

<div class="header">
<h2>Form</h2>
</div>
<form name="myForm" method="post" action="newupdate.php">
	
<input type="hidden" name="student_id" value="<?php echo $student_id ?>">

<div class="input-group">
<label>Student name</label>
<input type="text" name="student_name" value="<?php echo $student_name ?>">
</div>


<div class="input-group">
<label>Age</label>
<input type="number" name="age" value="<?php echo $age ?>">
</div>

<div class="input-group">
<label>Stream</label>
<input type="text" name="stream" value="<?php echo $stream ?>">
</div>

<div class="input-group">
<label>School</label>
<input type="text" name="school" value="<?php echo $school ?>">
</div>

<div class="input-group">
<label>Phone</label>
<input type="number" name="phonenumber" value="<?php echo $phonenumber ?>">
</div>

<div class="input-group">
<button type="submit" name="newupdate" class="btn">Update</button>
</div>

</form>


</body>
</html>