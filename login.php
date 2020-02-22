<?php include('server.php');
 ?>
<!DOCTYPE html>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<link rel="stylesheet" type="text/css" href="style.css">



</head>

<body style="background-color:powderblue;">



<header id="thusha">
   <h1 ><marquee>SCHOOL MANAGEMENT SYSTEM</marquee></h1>
</header>


<div class="header">
<h2>Login</h2>
</div>
<form method="post" action="login.php" >
<?php include('errors.php'); ?>
<div class="input-group">
<label>Username</label>
<input type="text" name="username">
</div>


<div class="input-group">
<label>Password</label>
<input type="password" name="password_1">
</div>

<div class="input-group">
<button type="submit" name="login" class="btn">Login</button>
</div>


</form>

</body>

</html>