<?php
include_once("connection.php");

try {
	$user = $_POST["inputUsername"];
	$pass = $_POST["inputPassword"];
	$gender = $_POST["inputGender"];

	if (!isset($user)) die('No username');
	if (!isset($pass)) die('No password');
	if (!isset($gender)) die('No gender');
	if ($gender != "Female" && $gender != "Male") die('Invalid gender');

	$stmt = $dbh->prepare(
		'SELECT * FROM User
		WHERE username = ?');
	$stmt->execute(array($user));
	if($stmt->fetch()) {
		echo "
		<script type=\"text/javascript\">
			window.alert('That username is already taken.');
			window.location.href = 'index.php?page=signUp';
		</script>";
		break;
	}

	$stmt = $dbh->prepare(
		'INSERT INTO User
		(username, password, lastLoginDate, registerDate, gender)
		VALUES (?,?,?,?,?)');
	$stmt->execute(array(
		$user,
		hash('sha256', $pass),
		date('Y-m-d H:i:s'),
		date('Y-m-d H:i:s'),
		$gender));
} catch(PDOException $e) {
	echo $e->getMessage();
	echo "
	<script type=\"text/javascript\">
		window.alert('Could not update database, please try again later.');
		window.location.href = 'index.php?page=signUp';
	</script>";
	break;
}

header("Location: index.php");
exit;
?>
