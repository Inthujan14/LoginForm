<?php include('server.php');

?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<link rel="stylesheet" type="text/css" href="style.css">

<script type="text/javascript">
	function validateForm()
	{
    	var x = document.forms["myForm"]["name"].value;
    	if (x == "")
    	{
        alert("Name must be filled out");
        return false;
    	}

    	var y = document.forms["myForm"]["age"].value;
    	if (y == "")
    	{
        alert("Age must be filled out");
        return false;
    	}

    	var z = document.forms["myForm"]["stream"].value;
    	if (z == "")
    	{
        alert("Stream must be filled out");
        return false;
    	}

    	var a = document.forms["myForm"]["school"].value;
    	if (a == "")
    	{
        alert("School must be filled out");
        return false;
    	}

	}

	function Validate()
        {
            var y = document.myForm.phonenumber.value;

           if(isNaN(y)||y.indexOf(" ")!=-1)
           {
              alert("Enter numeric value")
              return false; 
           }
           if (y.length>10 && y.length<10)
           {
                alert("enter 10 characters");
                return false;
           }
           if (y.charAt(0)!="7")
           {
                alert("it should start with 7 ");
                return false
           }
        }
</script>

</head>
<body>
<header id="thusha">
   <h1 ><marquee>SCHOOL MANAGEMENT SYSTEM</marquee></h1>
</header>


<div class="header">
<h2>Form</h2>
</div>
<form name="myForm" method="post" action="form.php" onsubmit="return validateForm()">
<?php include('errors.php'); ?>
<div class="input-group">
<label>Student name</label>
<input type="text" name="name" required>
</div>


<div class="input-group">
<label>Age</label>
<input type="number" name="age" required>
</div>

<div class="input-group">
<label>Stream</label>
<input type="text" name="stream" required>
</div>

<div class="input-group">
<label>School</label>
<input type="text" name="school" required>
</div>

<div class="input-group">
<label>Phone</label>
<input  name="phonenumber" type="tel"  onchange="Validate()">
</div>

<div class="input-group">
<button type="submit" name="register" class="btn">Register</button>
</div>


</form>

</body>
</html>