<?php
session_start();
if ($_SESSION['name'] AND ($_SESSION['type']=='admin' or $_SESSION['type']=='user')) {
?>
<html>
<head>
	<title>Profile</title>
</head>
<body>
<table border="2" width="30%">
	<tr>
		<td align="center" colspan="2">Profile</td>
	</tr>
	<tr>
		<td>ID</td>
		<td><?php echo $_SESSION['id']; ?></td>
	</tr>
	<tr>
		<td>NAME</td>
		<td><?php echo $_SESSION['name']; ?></td>
	</tr>
	<tr>
		<td>USER TYPE</td>
		<td><?php echo $_SESSION['type']; ?></td>
	</tr>
	<tr>
		<td colspan="2" align="right"><a href="home.php" >Go Home</a></td>
	</tr>
</table>
</body>
</html>

<?php

}
else
{
	header('location:index.php');
}
?>