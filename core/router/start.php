<?php

	if (empty($_GET)) {
		$_GET['app'] = 'user';
		$_GET['action'] = 'edit';
		$_GET['uid'] = '1';
	}

	switch ($_GET['app']) {

		case 'user':
			include 'modules/user/router/router.php';
			break;

		case 'article':
			# code...
			break;

		default:
			include '404.html';
			break;
	}
 ?>
