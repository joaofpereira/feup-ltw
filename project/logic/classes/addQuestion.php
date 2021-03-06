<?php
	include_once("connection.php");

	try {
		$stmt = $dbh->prepare(
			'INSERT INTO Question
			(idPoll, question)
			VALUES (?, ?)');
		$stmt->execute(array(
			$idPoll,
			$question));

	$stmt = $dbh->prepare(
		'SELECT MAX(idQuestion) AS lastId FROM Question');
	
	$stmt->execute();
	$idQuestion = $stmt->fetch()['lastId'];

	$optionN = 'option'.$i.'-1';

	for($j=1; isset($_POST[$optionN]); $j++, $optionN = 'option'.$i.'-'.$j) {
		$option = $_POST[$optionN];

		if($option !== "")
			include("addOption.php");
	}

	} catch(PDOException $e) {
		echo $e->getMessage();
	}
?>
