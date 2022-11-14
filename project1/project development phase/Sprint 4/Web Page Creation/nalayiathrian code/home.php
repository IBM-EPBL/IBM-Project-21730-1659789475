<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<HTML>
<HEAD>
<TITLE>Welcome</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
    body{
        background-image:url("https://img.freepik.com/premium-photo/magnifying-glass-documents-with-analytics-data-lying-table_33799-7624.jpg?w=2000");
        background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
    }
.dropdown {
  position: absolute;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
  display: block;
}

.btn:hover, .dropdown:hover .btn {
  background-color: #6b2139d6;
}
</style>
</HEAD>
<BODY>
    <!-- <img src="./assets/bg.jpg" alt=""> -->
	<div class="phppot-container">
    <a href = "./assets/story.html">
    <div class="col btn btn-danger" style="margin-top:45px;right: 0"> Story</div> 
     </a> 

    
     <div class="dropdown">
        <div class="col btn btn-danger" style="margin-top:45px;right: 0"> Report</div>
        </button>
      <div class="dropdown-content">
      <a href="./assets/report1.html">Report 1</a>
      <a href="./assets/report2.html">Report 2</a>
  </div>
</div> 
    <a href = "./assets/dashboard.html">
        <div class="col btn btn-danger" style="margin-left:70px; margin-top:45px"> User Dashboard</div><div class="page-header">
    </a>
        
       <!--<div class="col btn btn-danger" style="margin-right:20px;right:0"> Story</div><div class="page-header"> -->
		</div>
		<div class="page-content jumbotron" style="  background-color: red;
  background-image: linear-gradient(to right, darkgoldenrod , purple);">
  <h4 style="color:white; font-weight:bold;">Welcome to Account <?php echo $username;?></h4></div>
  <span class="login-signup btn btn-warning"><a href="logout.php" style="color:white">Logout</a></span>
	</div>
</BODY>
</HTML>