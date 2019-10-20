<?php

session_start();
$uname="";
$pass="";
$data="";
$fullData="";
$check =FALSE;
if (isset($_REQUEST['submit'])) {
	$uname=$_REQUEST['uname'];
	$pass =$_REQUEST['pass'];

	$file = fopen('db.txt', 'r');
	$data = fgets($file);
	$fullData = explode('|', $data);

	if (empty($uname) or empty($pass)) {
		echo "<script>alert('Username or password field is blank');</script>";
		echo "<script>window.location='index.php';</script>";
	}
	else
	{
		for ($i=1; $i <count($fullData) ; $i+=4) { 
			if ($uname==$fullData[$i] AND $pass==$fullData[$i+1]) {
				$check=TRUE;
				$_SESSION['name']=$uname;
				$_SESSION['pass']=$pass;
				$_SESSION['id']=$fullData[$i+2];
				$_SESSION['type']=$fullData[$i+3];
				break;
			}
			else
			{
				$check=FALSE;
			}
		}
	}

	if ($check==TRUE) {
		header('location:home.php');
	}
	else
	{
		header('location:index.php');
	}

}


?>