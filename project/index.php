<?php
require_once realpath(dirname(__FILE__) . "/config.php");

include TEMPLATES_PATH . '/header.php';

$currentPage = isset($_GET['page']) ? $_GET['page'] : 'signIn';

$pagesWithMandatoryLogin = array('feed', 'myPolls', 'profile', 'signOut', 'viewPoll', 'viewPollResults', 'search');

// if the current page is one of the pages with mandatory login
foreach ($pagesWithMandatoryLogin as $page) {
	// and user is not logged in
	if ($currentPage === $page && $_SESSION['username'] === null) {
		echo "
		<script type=\"text/javascript\">
			window.alert('You are not signed in.');
			window.location.href = 'index.php';
		</script>
		";

		// redirect to sign in page
		$currentPage = 'signIn';
		break;
	}
}

switch ($currentPage) {
	case 'signUp':
	include 'templates/signUp.php';
	break;

	case 'feed':
	include 'templates/feed.php';
	break;

	case 'myPolls':
	include 'templates/myPolls.php';
	break;

	case 'profile':
	include 'templates/profile.php';
	break;

	case 'viewPoll':	
	$idPoll = $_GET['id'];
	if(isset($_GET['previous']))
		$previousPage = urldecode($_GET['previous']);
	else {
		$previousPage = "Feed";
	}

	include 'logic/classes/pollResults.php';

	if(!$answered || isset($_GET['back']))
		include 'templates/viewPoll.php';
	else include 'templates/viewPollResults.php';
	break;

	case 'viewPollResults':
	$idPoll = $_GET['id'];
	if(isset($_GET['previous']))
		$previousPage = urldecode($_GET['previous']);
	else {
		$previousPage = "Feed";
	}
	include 'logic/classes/pollResults.php';
	include 'templates/viewPollResults.php';
	break;

	case 'search':
	include 'templates/searchResults.php';
	break;

	case 'otherUserProfile':
	$idUser = $_GET['id'];

	if($idUser === $_SESSION['idUser'])
		include 'templates/profile.php';
	else {
		include 'logic/classes/getUser.php';
		include 'templates/otherUserProfile.php';
	}
	break;
	
	default:
	include 'templates/signIn.php';
	break;
}

include 'templates/footer.php';
?>
