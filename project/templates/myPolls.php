	<!-- Custom styles for this template -->
	<link href="assets/css/dashboard.css" rel="stylesheet">
</head>
<body>
	<?php include 'navbar.php'; ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 main">
				<h1 class="page-header">My polls</h1>

				<div id="addNewPollButton">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  						+ Add New Poll
					</button>

					<!-- Modal -->
					<?php include 'addPollModal.php'; ?>
				</div>

				<div> </div>

				<div class="row placeholders">
					<div class="col-xs-6 col-sm-3 placeholder">
						<img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
						<h4>What is the best band of all time?</h4>
						<span class="text-muted">by Henrique Ferrolho</span>
					</div>
					<div class="col-xs-6 col-sm-3 placeholder">
						<img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
						<h4>Who is the last character to die in Game of Thrones?</h4>
						<span class="text-muted">by Henrique Ferrolho</span>
					</div>
				</div>
			</div>
		</div>
	</div>
