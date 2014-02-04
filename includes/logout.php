<?php
/**
 *
 * ############################################
 * Logout Processor
 * ############################################
 *
 * DESCRIPTION
 *
 * Processes Logout Request
 *
 * TABLE OF CONTENTS
 *
 * 1) Includes
 * 2) Tear Down Session
 *
 * @ Copyright (c) MPCP
 * @ Version
 * @ Author - Michael Krautkramer
 * @ Author - Daniel Oxenbury (http://Daniel.oxituk.co.uk)
*/


/*
* 1) Includes
*/
include_once 'includes/functions.php';
/*
* --------------------------
*/


/*
* 2) Tear Down Session
*/
// Unset all session values 
$_SESSION = array();
 
// get session parameters 
$params = session_get_cookie_params();
 
// Delete the actual cookie. 
setcookie(session_name(),
        '', time() - 42000, 
        $params["path"], 
        $params["domain"], 
        $params["secure"], 
        $params["httponly"]);
 
// Destroy session 
session_destroy();
header('Location: ../index.php');
/*
* --------------------------
*/

