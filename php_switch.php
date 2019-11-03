<?php
	header('Content-Type: text/html; charset=UTF-8');
	$variable='b';
	switch ($variable) {
		case 'a':
		case 'b':
		case 'c':
			echo 'a b c';
			break;
		case 'c':
			echo 'd';
			break;
		default:
			echo 'otro valor';
			break;
	}
	if ($variable == 'a' or $variable=='b' or $variable=='c') {
		echo 'a b c';
	} else if ($variable == 'd') {
		echo 'd';
	} else {
		echo 'otro valor';
	}
?>