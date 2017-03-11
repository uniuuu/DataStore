
<?php

session_start ();

include_once ("db.php");

if (isset($_POST['name_first']) && isset($_POST['name_last'])) {
	if ($_POST['name_first'] != "" && $_POST['name_last'] != "") {
		$first = $_POST ['name_first'];
		$last = $_POST ['name_last'];
		$sql_store = "INSERT into names (id, first, last) VALUES (NULL, '$first', '$last')";
		$sql = mysqli_query($db, $sql_store) or die(mysql_error());
		//$sql_store = "INSERT into names (id, first, last) VALUES (NULL, '1234', '1234')";
		//$sql = mysqli_query ( $db, $sql_store ) or die ( mysql_error () );
		echo "You entered '$first $last' into the database";
	} else {
		echo "You need to enter data in both fields.";
	}
} else {
	echo "You need to enter data in both fields.";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Store Form</title>
	
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<h1>Data Storage</h1>
	<form action="index.php" method="POST">
		<input type="text" name="name_first" value="" placeholder="First Name">
		<input type="text" name="name_last" value="" placeholder="Last Name">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>