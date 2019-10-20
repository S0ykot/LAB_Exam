
<?php

	session_start();
	if ($_SESSION['name'] AND $_SESSION['type']=='admin') {
	$viewU = '<a href="viewUsers.php">View Users</a>';
?>
<html>
<head>
	<title>Home page <?php echo $_SESSION['type']; ?></title>
</head>
<body>
<center>
	<h1>Welcome <?php echo $_SESSION['name'].'!';?></h1>
	<a href="profile.php">Profile</a><br>
	<a href="changePass.php">Change Password</a><br>
	<?php echo $viewU; ?><br>
	<a href="logout.php">Logout</a>
</center>
</body>
</html>


<?php

}
elseif ($_SESSION['name'] AND $_SESSION['type']=='user') {


?>
 
<html>
<head>
	<title>Home page <?php echo $_SESSION['type']; ?></title>
</head>
<body>
<center>
	<h1>Welcome <?php echo $_SESSION['name'].'!';?></h1>
	<a href="profile.php">Profile</a><br>
	<a href="changePass.php">Change Password</a><br>
	<a href="logout.php">Logout</a>
</center>
</body>
</html>

<?php

}
else
{
	echo "<script>alert('You must login for visit this page');</script>";
	echo "<script>window.location='index.php';</script>";
}

?>