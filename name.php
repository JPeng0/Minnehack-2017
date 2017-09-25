<?php
	/****** NOT SECURE ******/
	$key = $_GET['key'];
	$name = $_GET['name'];
	echo(file_get_contents('http://polarsunrise.com/strangr/?key=' . $key . '&name=' . $name . '&type=naming'));
?>