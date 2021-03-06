<?php
include_once("connection.php");

try {
	$currentUsername = $_SESSION['username'];
	$newPassword = $_POST["newPassword"];
	$newPasswordConfirmation = $_POST["newPasswordConfirmation"];

	if ($newPassword !== $newPasswordConfirmation) {
		$_SESSION['responseContent'] = 'Those passwords do not match.';
		header("Location: index.php?page=profile");
		exit();
	}

	$stmt = $dbh->prepare(
		'UPDATE User
		SET password = ?
		WHERE username = ?');
	$stmt->execute(array(
		hash('sha256', $newPassword),
		$currentUsername));

	$_SESSION['responseContent'] = 'Password successfully edited.';
} catch(PDOException $e) {
	echo $e->getMessage();
	$_SESSION['responseContent'] = 'Could not update database, please try again later.';
}

header("Location: index.php?page=profile");
exit;
?>
