<?php

	header("Content-Type: application/json; charset=UTF-8");
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST');

    $connection = mysql_connect('localhost', 'root', '123') or die ("Could not connect: " . mysql_error());;
	mysql_select_db('ioniclogin', $connection);

    $postdata = file_get_contents("php://input");
    
	var_dump($postdata);
    $postdataDecoded = json_decode($postdata);
	$username = $postdataDecoded->name;
	$email = $postdataDecoded->email;
	$password = $postdataDecoded->password;
	
	//$query = 'INSERT INTO users(name, email, password) VALUES ("'.$username .'", "'.$email.'", "'.$password.'")';
	$query = 'INSERT INTO users(name, email, password) VALUES ("yo", "tu", "pass")';	
	$query_run = mysql_query($query);

	if($query_run){
		echo "nice done";
	}
	else{
		echo "bad done";
	}
?>