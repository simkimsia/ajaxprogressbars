<?php

	header('Content-Type: application/json');
	ini_set('display_errors', 1);

	require_once('jsonobject.php');

	$json = new JsonObject(true);

	echo json_encode($json->getJsonData());