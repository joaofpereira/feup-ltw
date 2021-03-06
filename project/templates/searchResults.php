	<!-- Custom styles for this template -->
	<link href="assets/css/dashboard.css" rel="stylesheet">
</head>
<body>
	<?php include 'navbar.php'; ?>
	<?php include 'logic/classes/searchPolls.php'; ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 main">
				<h1 class="page-header">Search results</h1>

				<div class="row placeholders">
					<?php foreach ($polls as $currentPoll) { ?>
					<div class="col-xs-12 col-sm-4 col-md-3 placeholder">
						<div class="placeholder-container">
							<a href=<?= "index.php?page=viewPoll&id=" . $currentPoll['idPoll'] . "&previous=Search+results"; ?> id="modal-view">
								<img class="resize-to-fit-and-center placeholder-containter-img" href=<?= "index.php?page=viewPoll&id=".$currentPoll['idPoll']."&previous=Feed"; ?> id="modal-view" src="<?= $currentPoll['image'] != '' ? UPLOADS_URL . "/" . $currentPoll['image'] : 'assets/img/default-poll.png' ?>" alt="Default poll image">
							</a>
						</div>

						<h4><?= $currentPoll['title']; ?></h4>
						<span class="text-muted user-profile"> by
							<a id="user-profile" class="text-muted" href=<?="index.php?page=otherUserProfile&id=" . $currentPoll['idUser'] ?>>
								<?=' '.$currentPoll['author'];?>
							</a>
						</span>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
