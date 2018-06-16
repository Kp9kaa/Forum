<?php
	$dbhost = "localhost";
	$dbname = "forum_bd";
	$password = "";
	$username = "root";

	$db = new PDO("mysql:host=$dbhost; dbname=$dbname",$username,$password);
