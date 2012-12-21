<?php

	header('Content-Type: application/json');
	
	sleep(5);

	require_once('jsonobject.php');

	$json = new JsonObject(true);

	echo json_encode($json->getJsonData());