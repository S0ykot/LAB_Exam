
<?php

session_start();
if ($_SESSION['name'] AND $_SESSION['type']=='admin') {

	$file = fopen('db.txt', 'r');
	$data = fgets($file);
	fclose($file);

	$full = explode("|", $data);

?>
<html>
<head>
	<title>View Users</title>
</head>
<body>
<table border="1" width="40%">
	<tr>
		<td colspan="3" align="center">Users</td>
	</tr>
	<tr>
		<td>ID</td>
		<td>NAME</td>
		<td>USER TYPE</td>
	</tr>
	<?php 

		for ($i=1; $i<count($full); $i=$i+4) { 
			echo "
				<tr>
				<td>".$full[$i+2]."</td>
				<td>".$full[$i]."</td>
				<td>".$full[$i+3]."</td>
				</tr>
			";
		}

	?>

	<tr>
		<td colspan="3" align="right"><a href="home.php">Go Home</a></td>
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