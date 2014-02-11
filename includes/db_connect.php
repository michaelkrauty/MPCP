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
 * 3) Create User
 * 4) Delete User
 * 5) Modify User
 * 6) List Users
 * 7) Get Users Servers
 * 8) Create Server
 * 9) Delete Server
 * 10) Modify Server
 * 11) List Servers
 * 12) Authentication (Login)
 * 13) Create Plan
 * 14) Delete Plan
 * 15) Modify Plan
 * 16) List Plans
 * 17) GetEmeralds
 *
 * @ Copyright (c) MPCP
 * @ Version
 * @ Author - Michael Krautkramer
 * @ Author - Daniel Oxenbury (http://daniel.oxituk.co.uk)
*/


/*
* 1) Includes
*/
 include_once 'mpcp-config.php';
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

/*
* 3) Create User
*/
function createUser($email, $password, $mcusername, $salt) {
	$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
	$prep_stmt = "INSERT INTO users (email, password, mcusername, salt) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($prep_stmt);
	$stmt->bind_param("ssss", $email, $password, $mcusername, $salt);
	$stmt->execute();
}
/*
* --------------------------
*/

/*
* 4) Delete User
*/
function deleteUser($userid) {
        $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
        $prep_stmt = "DELETE FROM users WHERE userid = ? LIMIT 1";
        $stmt = $mysqli->prepare($prep_stmt);
        $stmt->bind_param("s", $userid);
        $stmt->execute();
}
/*
* --------------------------
*/

/*
* 5) Modify User
*/
function modifyUser($userid, $field, $value) {
        $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
        $prep_stmt = "UPDATE users SET ? = ? WHERE userid = ?";
        $stmt = $mysqli->prepare($prep_stmt);
        $stmt->bind_param("sss", $field, $value, $userid);
        $stmt->execute();
}
/*
* --------------------------
*/

/*
* 6) List Users
*/
function listUsers() {
        $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
	$result = mysqli_query($mysqli, "SELECT * FROM users");
	return $result;
}
/*
* --------------------------
*/

/*
* 7) Get Users Servers
*/
function getUsersServers($userid) {
        $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
        $prep_stmt = "SELECT * FROM servers WHERE owner = ?";
        $stmt = $mysqli->prepare($prep_stmt);
        $stmt->bind_param("s", $userid);
        $stmt->execute();
}
/*
* --------------------------
*/

/*
* 8) Create Server
*/
function createServer($servername, $serverowner, $serverjar, $serverip, $serverport, $serverplan) {
        $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
        $prep_stmt = "INSERT INTO servers (name, owner, jar, ip, port, plan) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($prep_stmt);
        $stmt->bind_param("ssssss", $servername, $serverowner, $serverjar, $serverip, $serverport, $serverplan);
        $stmt->execute();
}
/*
* --------------------------
*/

/*
* 9) Delete Server
*/
function deleteServer($serverid){
        $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
        $prep_stmt = "DELETE FROM servers WHERE serverid = ? LIMIT 1";
        $stmt = $mysqli->prepare($prep_stmt);
        $stmt->bind_param("s", $serverid);
        $stmt->execute();
}
/*
* --------------------------
*/

/*
* 10)  Modify Server
*/
function modifyServer($serverid, $field, $value) {
        $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
        $prep_stmt = "UPDATE servers SET ? = ? WHERE serverid = ?";
        $stmt = $mysqli->prepare($prep_stmt);
        $stmt->bind_param("sss", $field, $value, $serverid);
        $stmt->execute();
}
/*
* --------------------------
*/

/*
* 11) List Servers
*/
function listServers() {
        $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
        $result = mysqli_query($mysqli, "SELECT * FROM servers");
        return $result;
}

}
/*
* --------------------------
*/

/*
* 12) User Authentication
*/
function userAuthentication($email, $password) {
        $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
        $prep_stmt = "SELECT * FROM users WHERE email = ? LIMIT 1";
        $stmt = $mysqli->prepare($prep_stmt);
        $stmt->bind_param("s", $email);
        $stmt->execute();
}
/*
* --------------------------
*/

/*
* 13) Create Plan
*/
function createPlan($planname, $maxslots, $storage, $memory) {
        $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
        $prep_stmt = "INSERT INTO plans (name, slots, storage, memory) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($prep_stmt);
        $stmt->bind_param("ssss", $planname, $maxslots, $storage, $memory);
        $stmt->execute();
}
/*
* --------------------------
*/

/*
* 14) Delete Plan
*/
function deletePlan($planid) {
        $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
        $prep_stmt = "DELETE FROM plans WHERE planid = ?";
        $stmt = $mysqli->prepare($prep_stmt);
        $stmt->bind_param("s", $planid);
        $stmt->execute();
}
/*
* --------------------------
*/

/*
* 15) Modify Plan
*/
function modifyPlan($planid, $field, $value) {
        $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
        $prep_stmt = "UPDATE plans SET ? = ? WHERE $planid = ?";
        $stmt = $mysqli->prepare($prep_stmt);
        $stmt->bind_param("sss", $field, $value, $planid);
        $stmt->execute();
}
/*
* --------------------------
*/

/*
* 16) List Plans
*/
function listPlans() {
        $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
        $result = mysqli_query($mysqli, "SELECT * FROM plans");
        return $result;
}
/*
* --------------------------
*/

/*
* 16) Get Emeralds  //Vulrnrable to SQLI
*/
function getEmeralds($username) {
        $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
        $result = mysqli_query($mysqli, "SELECT emeralds FROM users WHERE username = $username LIMIT 1");
        return $result;
}
/*
* --------------------------
*/
