<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
<fieldset style="width: 180px;">
	<legend><h3>REGISTRATION</h3></legend>
	<form action="" method="POST">
	<table border="0" width="50%">
		<tr>
			<td>Id<br><input type="text" name="id" autocomplete="off"></td>
		</tr>
		<tr>
			<td>Password<br><input type="password" name="pass1"></td>
		</tr>
		<tr>
			<td>Confirm Password<br><input type="password" name="pass2"></td>
		</tr>
		<tr>
			<td>Name<br><input type="text" name="name" autocomplete="off"></td>
		</tr>
		<tr>
			<td>User Type<br><hr></td>
		</tr>
		<tr>
			<td><input type="radio" name="type" value="user">User<input type="radio" name="type" value="admin">Admin</td>
		</tr>
		<tr>
			<td><hr></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Sign Up"><a href="index.php">Sign In</a></td>
		</tr>
		
		<tr></tr>
	</table>
	</form>
</fieldset>
</body>
</html>

<?php
error_reporting(0);
if (isset($_REQUEST['submit'])) {
	$id= $_REQUEST['id'];
	$p1= $_REQUEST['pass1'];
	$p2 = $_REQUEST['pass2'];
	$name = $_REQUEST['name'];
	$utype = $_REQUEST['type'];


	if (empty($id) or empty($p1) or empty($p2) or empty($p2) or empty($name) or empty($utype))  {
		echo "<script>alert('Blank input found');</script>";
	}
	else
	{
		if ($p1==$p2) {
			$data = '|'.$name.'|'.$p1.'|'.$id.'|'.$utype;
			$file = fopen('db.txt', 'a');
			fwrite($file, $data);
			fclose($file);
			echo "<script>alert('Registration Successful');</script>";
		}
		else
		{
			echo "<script>alert('Password not matching');</script>";
		}
	}
}

?>