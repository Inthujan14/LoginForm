<?php

//session_start();

$username='';
$email='';
$password_1='';

$studentname='';
$age='';
$stream='';
$school='';
$phonenumber='';

$errors=array();

$user='root';
$pass='';
$db='intern';

$db=new mysqli('localhost',$user,$pass,$db)  or die("Unable to connect");



//users login
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password_1=$_POST['password_1'];
	
	if(empty($username))
{
	array_push($errors,"Username is required");
}

if(empty($password_1))
{
	array_push($errors,"Password is required");
}
if(count($errors)==0)
{
	$query="select * from user_detail where username='$username' and password='$password_1'";
	$result=mysqli_query($db,$query);
	if(mysqli_num_rows($result)==1){
		$_SESSION['username']=$username;
		//$_SESSION['success']="You are now logged in";
		header('location:form.php');
	}
	else{
		array_push($errors,"Wrong username,password combination");
		//header('location:login.php');
	}
}
}


//form sending
if(isset($_POST['register']))
{

$studentname=$_POST['name'];
$age=$_POST['age']; 
$stream=$_POST['stream'];
$school=$_POST['school'];
$phonenumber=$_POST['phonenumber'];



if(empty($studentname))
{
	array_push($errors,"Student Name is required");
}
if(empty($age))
{
	array_push($errors,"Age is required");
}
if(empty($stream))
{
	array_push($errors,"Stream is required");
}
if(empty($school))
{
	array_push($errors,"School is required");
}
if(empty($phonenumber))
{
	array_push($errors,"Phonenumber is required");
}


	if(count($errors)==0)
	{
	$sql="insert into register(student_name,age,stream,school,phonenumber) values('$studentname','$age','$stream','$school','$phonenumber')";
	mysqli_query($db,$sql);
$_SESSION['username']=$username;
//$_SESSION['success']="You are now logged in";
header('location:view.php');
	}
}

if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location:login.php');
}

?>