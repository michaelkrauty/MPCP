<?php
/**
 *
 * ############################################
 * Login Processor
 * ############################################
 *
 * DESCRIPTION
 *
 * Processes Login Requests
 *
 * TABLE OF CONTENTS
 *
 * 1) Includes
 * 2) Start Session
 * 3) Login Post
 *
 * @ Copyright (c) MPCP
 * @ Version
 * @ Author - Michael Krautkramer
 * @ Author - Daniel Oxenbury (http://Daniel.oxituk.co.uk)
*/


/*
* 1) Includes
*/
include_once 'db_connect.php';
include_once 'functions.php';
/*
* --------------------------
*/


/*
* 2) Start PHP Session
*/
sec_session_start();
/*
* --------------------------
*/

/*
* 3) Login Post
*/
	if (isset($_POST['email'], $_POST['p'])) {
    		$email = $_POST['email'];
    		$password = $_POST['p']; // The hashed password.
		if (login($email, $password, $mysqli) == true) {
       			// Login success 
        		header('Location: ../login.php');
   		} else {
		        // Login failed 
        		header('Location: ../index.php?error=1');
		}
		} else {
    		// The correct POST variables were not sent to this page. 
    		echo 'Invalid Request';
		}
/*
* --------------------------
*/

