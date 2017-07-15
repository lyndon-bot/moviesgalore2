<?php
	function login(){
		include 'query.php';
		$match = query("SELECT COUNT(*) FROM ____ WHERE user=$user and password=$pass");
		if($match == 1){
			session_start();
			$_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;
			header("location: index.php");
		} else {

		}
	}

	function Register(){
		include 'query.php';
		$match = query("SELECT * FROM ______ where username = $user and password = $pass");
		if($match == 0){
			query("INSERT INTO ____ ('username','password') VALUES ('$user', '$pass'");
		}
	}
?>