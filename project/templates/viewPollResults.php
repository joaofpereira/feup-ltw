<?php 
	$previousPage = urldecode($_GET['previous']);
	include 'templates/navbar.php';
?>
	<link href="assets/css/dashboard.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 col-md-12 main">
			<div class="my-polls-header page-header row">
				<h1 class="my-polls-header-title pull-left"> <?= $previousPage; ?></h1>
			</div>

			<div class="modal fade" id="viewPollModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h3 class="modal-title" id="myModalLabel"> <?= $poll['title'] ?> </h3>
						</div>

						<div class="row placeholders">
							<div class="modal-body">
								<?php
									foreach($poll['questions'] as &$currentQuestion): ?>
								<div>
									<div align="left">
										<div class="form-group-lg">
											<h4><?=$currentQuestion['question'] ?></h4>
										</div>
										<div class="form-group-sm">
											<?php foreach($currentQuestion['options'] as $currentOption): ?>
											<div>
				  								<p>
				  									<?=$currentOption['counter']." - ".$currentOption['option'] ?>
				  								</p>
											</div>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal"> Close </button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>