<?php
/**
 *
 * ############################################
 * Database Controller
 * ############################################
 *
 * DESCRIPTION
 *
 * MPCP Database Controller.
 *
 * TABLE OF CONTENTS
 *
 * 1) Includes
 * 2) Database Connnector
 *
 * @ Copyright (c) MPCP
 * @ Version
 * @ Author - Michael Krautkramer
 * @ Author - Daniel Oxenbury (http://Daniel.oxituk.co.uk)
*/


/*
* 1) Includes
*/
 include_once 'mpcp-config.php'
/*
* --------------------------
*/


/*
* 2) Database Connector
*/
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
/*
* --------------------------
*/
