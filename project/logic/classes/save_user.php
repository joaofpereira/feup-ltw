<?php
include_once("connection.php");

try {
	$user = $_POST["username"];
	$pass = $_POST["password"];
	//$options = ['cost' => 12];

	$stmt = $dbh->prepare('SELECT * FROM User WHERE username = ?');
  	$stmt->execute(array($user));
  	if($stmt->fetch() !== false)
  		die('Username already in use');

	$stmt = $dbh->prepare('INSERT INTO User (username, registerDate, lastLoginDate, password) VALUES (?,?,?,?)');
	$stmt->execute(array(
		$user, 
		date('Y-m-d h:i:s'), 
		date('Y-m-d h:i:s'), 
		hash('sha256',$pass)));
		//password_hash($pass, PASSWORD_DEFAULT, $options)));

}
catch(PDOException $e) {
	echo $e->getMessage();
}

header("Location: ../../index.php");
exit;
?>