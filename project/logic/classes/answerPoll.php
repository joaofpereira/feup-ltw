<?php
	include_once("connection.php");

	try {

		for($j=0; isset($_POST[$j]); $j++) {
		$idOption = $_POST[$j];

		$stmt = $dbh->prepare(
			'INSERT INTO UserOption
			(idUser, idOption)
			VALUES (?,?)');
		$stmt->execute(array(
			$_SESSION["idUser"],
			$idOption));

		$stmt = $dbh->prepare(
		'UPDATE Option SET counter = counter + 1  WHERE idOption = ?');
		$stmt->execute(array($idOption));
	}


	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	header("Location: index.php?page=viewPollResults&id=".$idPoll);
?>