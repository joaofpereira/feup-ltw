	<!-- Custom styles for this template -->
	<link href="assets/css/profile.css" rel="stylesheet">
</head>
<body>
	<?php include 'navbar.php'; ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 main">
				<h1 class="page-header">Profile</h1>

				<h1 class="profile-greeting text-center">Welcome, <?= $_SESSION['username'] ?>.</h1>

				<div class="row">
					<div class="col-xs-12 col-sm-offset-3 col-sm-3 profile-pic">
						<img id="currentImage" src="<?= isset($_SESSION['image']) ? UPLOADS_URL . "/" . $_SESSION['image'] : 'assets/img/blank-profile.png' ?>" class="img-responsive" alt="Blank profile picture"  data-toggle="modal" data-target="#uploadImageModal">
						<?php include 'uploadImageModal.php'; ?>
					</div>

					<div class="col-xs-12 col-sm-5">
						<div class="edit-profile-btn">
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#editUsernameModal">
								<span class="glyphicon glyphicon-edit"></span> Edit username
							</button>

							<!-- Modal -->
							<div class="modal fade" id="editUsernameModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">
												<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
											</button>
											<h4 class="modal-title" id="myModalLabel"> Edit username</h4>
										</div>

										<form class="form-edit-username" role="form" action="actions.php?action=editUsername" method="POST">
											<div class="modal-body">
												<div class="form-group">
													<input type="text" class="form-control" name="newUsername" placeholder="New username" required autofocus>
												</div>
											</div>

											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
												<button type="submit" class="btn btn-primary">Save changes</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

						<div class="edit-profile-btn">
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#editPasswordModal">
								<span class="glyphicon glyphicon-edit"></span> Edit password
							</button>

							<!-- Modal -->
							<div class="modal fade" id="editPasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">
												<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
											</button>
											<h4 class="modal-title" id="myModalLabel"> Edit password</h4>
										</div>

										<form class="form-edit-password" role="form" action="actions.php?action=editPassword" method="POST">
											<div class="modal-body">
												<div id="inputPasswordDiv" class="form-group">
													<input type="password" name="newPassword" id="inputPassword" class="form-control" placeholder="New password" required autofocus>
												</div>
												<div id="inputPasswordConfirmDiv" class="form-group">
													<input type="password" id="inputPasswordConfirmation" class="form-control" name="newPasswordConfirmation" placeholder="Confirm new password" required>
												</div>
											</div>

											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
												<button type="submit" class="btn btn-primary">Save changes</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						
						<!--last login date and register date -->
						<div class="userLastLoginAndRegister">
							<h5><b>Last login:</b> <?=$_SESSION['lastLoginDate'];?></h5>
							<h5><b>Register date:</b> <?=$_SESSION['registerDate'];?></h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
