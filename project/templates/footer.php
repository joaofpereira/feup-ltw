	<footer>
		<p>Copyright © 2014 PollHub</p>
	</footer>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="assets/frameworks/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/frameworks/bootstrap/js/bootstrap-filestyle.js"></script>

	<script type="text/javascript" src="assets/js/vendor/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="assets/js/jquery.iframe-transport.js"></script>
	<script type="text/javascript" src="assets/js/jquery.fileupload.js"></script>
	<script type="text/javascript" src="assets/js/ZeroClipboard.js"></script>

	<script type="text/javascript" src="actions/checkPasswordStrength.js"></script>
	<script type="text/javascript" src="actions/copyToClipboard.js"></script>
	<script type="text/javascript" src="actions/formDropdownButton.js"></script>
	<script type="text/javascript" src="actions/multipleQuestions.js"></script>
	<script type="text/javascript" src="actions/fileUpload.js"></script>
	<script type="text/javascript" src="actions/openViewPollModal.js"></script>
	<script type="text/javascript" src="actions/setUserProfilePic.js"></script>
	<script type="text/javascript" src="actions/updatePrivacy.js"></script>
	<script type="text/javascript" src="actions/redirectOnClosingModal.js"></script>

	<script type="text/javascript">
		<?php
		if($_SESSION['responseContent'] != '') {
			echo "alert('".$_SESSION['responseContent']."');";
			$_SESSION['responseContent'] = '';
		}
		?>
	</script>
	
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
