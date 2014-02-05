<?php include_once "includes/db_connect.php"; include_once "includes/functions.php";
  sec_session_start();
  if(login_check($mysqli) == true){
  ?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Daniel Oxenbury (http://daniel.oxituk.co.uk)">
    <meta name="author" content="Michael Krautkramer">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>MPCP Login</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="webroot/css/index.css" rel="stylesheet">
    <?php
      $userEmail = $_SESSION['email'];
      $userName = $_SESSION['username'];
    ?>
    <?php
      $pageName = "index";
    ?>
</head>
  <?php include_once "./includes/header.inc.php"; ?>
  <body role='document'> <body role='document'>
  <div class='container theme-showcase' role='main'>
    <div class='jumbotron'>
      <div class='page-header'>
        <center>
          <h2>Welcome, <?php echo $userName; ?>!</h2>
	  <?php
          $image1 = "http://signaturecraft.us/avatars/30/face/" . $userName . ".png";
          $image2 = "http://signaturecraft.us/avatars/30/face/noskin.png";
            $md5image1 = md5(file_get_contents($image1));
            $md5image2 = md5(file_get_contents($image2));
            if($md5image1 == $md5image2){
              echo "<img src='http://signaturecraft.us/avatars/30/face/Herobrine.png' height='100' width='100'>";
            }else{
              echo "<img src='http://signaturecraft.us/avatars/30/face/" . $userName . ".png' height='100' width='100'>";
            }
          ?><br></br>
	  <h2> Your Servers </h2>
<table class="table table-striped table-bordered table-condensed">
        <center>
        <tr>
        <th width="10%"> Server ID </th>
        <th width="20%"> Server Address </th>
        <th width="20%"> Server Name </th>
        <th width="10%"> Players </th>
        <th width="10%"> Server Status </th>
        <th width="30%"> Quick Commands </th>
        <tr class="success">
                <td> 00001 </td>
                <td> 192.168.1.1:25565 </td>
                <td> Test Server 1 </td>
                <td> 0 / 24 </td>
                <td> ONLINE </td>
                <td><form><button disabled="disabled" name="start" type="submit" class='btn btn-small btn-success'>Start</button> <button name="stop" type="submit" class='btn btn-small btn-danger'>Stop</button> <button name="restart$
        </tr>
        <tr class="success">
                <td> 00002 </td>
                <td> 192.168.1.2:25565 </td>
                <td> Test Server 2 </td>
                <td> 0 / 24 </td>
                <td> ONLINE </td>
                <td><form><button disabled="disabled" name="start" type="submit" class='btn btn-small btn-success'>Start</button> <button name="stop" type="submit" class='btn btn-small btn-danger'>Stop</button> <button name="restart$
        <tr class="warning">
                <td> 00003 </td>
                <td> 192.168.1.3:25565 </td>
                <td> Test Server 3 </td>
                <td> 0 / 24 </td>
                <td> OFFLINE </td>
                <td><form><button name="start" type="submit" class='btn btn-small btn-success'>Start</button> <button disabled="disabled" name="stop" type="submit" class='btn btn-small btn-danger'>Stop</button> <button disabled="dis$
                </tr>
        <tr class="success">
                <td> 00004 </td>
                <td> 192.168.1.4:25565 </td>
                <td> Test Server 4 </td>
                <td> 0 / 24 </td>
                <td> ONLINE </td>
                <td><form><button disabled="disabled" name="start" type="submit" class='btn btn-small btn-success'>Start</button> <button name="stop" type="submit" class='btn btn-small btn-danger'>Stop</button> <button name="restart$
        </tr>
        <tr class="warning">
                <td> 00005 </td>
                <td> 192.168.1.5:25565 </td>
                <td> Test Server 5 </td>
                <td> 0 / 24 </td>
                <td> OFFLINE </td>
                <td><form><button name="start" type="submit" class='btn btn-small btn-success'>Start</button> <button disabled="disabled" name="stop" type="submit" class='btn btn-small btn-danger'>Stop</button> <button disabled="dis$
        </tr>
        </center>
</table>





	<h2> CPU Usage </h2>
	


	<h2> RAM Usage </h2>


	</center>
      </div>
    </div>
  </body>
  <?php
    }else{
    ?>
    <script>
      alert("You must be logged in to view this page!");
    </script>
    <?php
      header("Location: http://dominationvps.com/mpcp/login.php");
    }
  ?>
  <?php include_once "./includes/footer.inc.php"; ?>

</html>
    <!-- ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./bootstrap/assets/js/docs.min.js"></script>
    <script src="./webroot/js/Chart.js"></script>
