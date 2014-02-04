<?php
/**
 *
 * ############################################
 * Functions
 * ############################################
 *
 * DESCRIPTION
 *
 * Functions.
 *
 * TABLE OF CONTENTS
 *
 * 1) Includes
 * 2) Secure Session Function
 * 3) Login Function
 * 4) Check Brute Force
 * 5) Login Check
 * 6) Sanitize URL from PHP_SELF
 *
 * @ Copyright (c) MPCP
 * @ Version
 * @ Author - Michael Krautkramer
 * @ Author - Daniel Oxenbury (http://Daniel.oxituk.co.uk)
*/

/*
* 1) Includes
*/
include_once 'MPCP-config.php';
/*
* --------------------------
*/

/*
* 2) Secure Session Function
*/
function sec_session_start(){
	$session_name = 'sec_session_id'; // Session Name.
	$secure = SECURE; // Stops JS from accessing session id.
	$httponly = true;
/*
	// Forces session to only use cookies.
	if (ini_set('session.use_only_cookies', 1) === FALSE) {
		header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
		exit();
	}
*/
	// Gets current cookies params.
	$cookieParams = session_get_cookie_params();
	session_set_cookie_params($cookieParams["lifetime"],
		$cookieParams["path"],
		$cookieParams["domain"],
		$secure,
		$httponly);

	session_name($session_name); // Sets the session name to the one set above.
	session_start(); // Start the PHP session.
	session_regenerate_id(); // Delete old session and regenrate.
}
/*
* --------------------------
*/

/*
* 3) Login Function
*/
function login ($email, $password, $mysqli) {

	// Prepared statment to stop SQL injection.
	if ($stmt = $mysqli->prepare("SELECT id,  username, password, salt FROM members WHERE email = ? LIMIT 1"))
	$stmt->bind_param('s', $email); // Bind email to the parameter
	$stmt->execure(); // Execute out statment
	$stmt->store_result();

	// Get variables from result
	$stmt->bind_result($user_id, $username, $dbpassword, $salt);
	$stmt->fetch();

	// Hash the password with the salt
	$password = hash('sha512', $password . $salt);

	// If account exists check if the account is locked.
	if ($stmt->num_rows == 1) {
		if (checkbrute($user_id, mysqli) == true) {
		return false; // Account is locked
		}
	else {
		// Check if the password in the batabase matches & XSS protection.
		if ($db_password == $password) {
			$user_browser = $_SERVER['HTTP_USER_AGENT'];
			$user_id = preg_replace("/[^0-9]+/", "", $user_id);
			$_SESSION['user_id'] = $user_id;
			$username = preg_replace("/[^a-zA-Z0-9_\-]+/","",$username);
			$_SESSION['username'] = $username;
			$_SESSION['login_string'] = hash('sha512', $password . $user_browser);
			return true; // Login Sucsessfull
		} else {
			// Password is incorrect record in database.
			 $now = time();
			 $mysqli->query("INSERT INTO login_attempts(user_id, time) VALUES ('$user_id', '$now')");
			return false;
		}
	}
	} else {
		return false; // No user exists.
	}
}

/*
* --------------------------
*/

/*
* 4) Check Bruteforce
*/

function checkbrute($user_id, $mysqli) {

	$now  = time();
	// All login attempts are counts for the past 2 hours
	$valid_attempts = $now - (2 * 60 * 60);

	if ($stmt = $mysqli->prepare("SELECT time FROM login_attempts <code><pre> WHERE user_id = ? AND time > '$valid_attempts'")) {
	$stmt->bind_param('i', $user_id);
	$stmt->execute();
	$stmt->store_result();

	if ($stmt->num_rows > 5) {
		return true;
	} else {
		return false;
	}
}
}

/*
* --------------------------
*/


/*
* 4) Login Check
*/

function login_check ($mysqli) {

	if (isset($_SESSION['user_id'],	$_SESSION['username'], $_SESSION['loggin_string'])) {
		$user_id = $_SESSION['user_id'];
		$login_string = $_SESSION['login_string'];
		$username = $_SESSION['username'];

	$user_browser = $_SERVER['HTTP_USER_AGENT'];

	if ($stmt = $stmt = $mysqli->prepare("SELECT password FROM members WHERE id = ? LIMIT 1")) {
		$stmt->bind_param('i', $user_id);
		$stmt->execute();
		$stmt->store_result();

		if ($stmt->num_rows == 1) {
			$stmt->bind_result($password);
			$stmt->fetch();
			$login_check = hash('sha512', $password . $user_browser);

			if ($login_check == $login_string) {
				return true; // Logged In.
			} else {
				return false; // Not Logged In.
			}
		} else {
		return false; // Not Logged In.
		}
	} else {
	return false; // Not Logged In.
	}
}
}

/*
* --------------------------
*/

/*
* 5) Sanitize URL from PHP_SELF
*/

function esc_url($url) {
 
    if ('' == $url) {
        return $url;
    }
 
    $url = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);
 
    $strip = array('%0d', '%0a', '%0D', '%0A');
    $url = (string) $url;
 
    $count = 1;
    while ($count) {
        $url = str_replace($strip, '', $url, $count);
    }
 
    $url = str_replace(';//', '://', $url);
 
    $url = htmlentities($url);
 
    $url = str_replace('&amp;', '&#038;', $url);
    $url = str_replace("'", '&#039;', $url);
 
    if ($url[0] !== '/') {
        // We're only interested in relative links from $_SERVER['PHP_SELF']
        return '';
    } else {
        return $url;
    }
}

/*
* --------------------------
*/

