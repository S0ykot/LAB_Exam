<html>
<head>
	<title>Login</title>
</head>
<body>
<fieldset style="width: 180px; ">
	<legend><h3>LOGIN</h3></legend>
	<form action="checkLogin.php" method="POST">
		<table width="50%" border="0">
			<tr>
				<td>User Id<br><input type="text" name="uname" autocomplete="off"></td>
			</tr>
			<tr>
				<td>Password<br><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td><hr></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Login"><a href="reg.php">Register</a></td>
			</tr>
		</table>
	</form>
</fieldset>
</body>
</html>
<?php

	session_start();
	$file = fopen('db.txt', 'r');
	$data = fgets($file);
	$fullData = explode('|', $data);

	print_r($fullData);

?>