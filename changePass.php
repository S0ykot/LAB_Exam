<?php
session_start();
if ($_SESSION['name'] AND ($_SESSION['type']=='admin' or $_SESSION['type']=='user')) {
?>

<html>
<head>
	<title>Change Password</title>
</head>
<body>
<fieldset style="width: 190px;">
	<legend><h4>CHANGE PASSWORD</h4></legend>
	<form>
		<table border="0">
			<tr>
				<td>Current Password<br><input type="password" name="cp"></td>
			</tr>
			<tr>
				<td>New Password<br><input type="pasword" name="np1"></td>
			</tr>
			<tr>
				<td>Retype New Password<br><input type="password" name="np2"></td>
			</tr>
			<tr>
				<td><hr></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Change"><a href="home.php">Home</a></td>
			</tr>
		</table>
	</form>
</fieldset>
</body>
</html>

<?php
}else
{
	header('location:index.php');
}


if (isset($_REQUEST['submit'])) {
	
	$cp = $_REQUEST['cp'];
	$np1= $_REQUEST['np1'];
	$np2= $_REQUEST['np2'];

	$file = fopen('db.txt', 'r');
	$data = fgets($file);
	fclose($file);
	$data1 = explode('|', $data);


	if (empty($cp) or empty($np1) or empty($np2)) {
			echo "<script>alert('Blank field');</script>";
	}
	else
	{
		if ($cp==$_REQUEST['pass']) {
			if ($np1==$np2) {
				for ($i=1; $i < count($data1); $i+=4) { 
					
				}
			}
				else
				{
					echo "<script>alert('Password not matching');</script>";
						}
		}
		else
		{
			echo "<script>alert('Current password is wrong');</script>";
		}
	}
}

?>