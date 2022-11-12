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
	<div class="phppot-container" >
    <a href = "https://us3.ca.analytics.ibm.com/bi/?perspective=story&pathRef=.my_folders%2FRetail%2BStory&action=view&sceneId=model000001846bf2e41b_00000000&sceneTime=8300">
    <div class="col btn btn-danger" style="margin-top:45px;right: 0"> Story</div> 
     </a> 

    
     <div class="dropdown">
        <div class="col btn btn-danger" style="margin-top:45px;right: 0"> Report</div>
        </button>
      <div class="dropdown-content">
      <a href="https://us3.ca.analytics.ibm.com/bi/?perspective=authoring&id=iBF7A8D4464294EB98D2522BF2A013340&objRef=iBF7A8D4464294EB98D2522BF2A013340&action=edit&cmPropStr=%7B%22id%22%3A%22iBF7A8D4464294EB98D2522BF2A013340%22%2C%22type%22%3A%22reportTemplate%22%2C%22defaultName%22%3A%22report-TAB2%22%2C%22permissions%22%3A%5B%22execute%22%2C%22read%22%2C%22setPolicy%22%2C%22traverse%22%2C%22write%22%5D%7D">Report 1</a>
      <a href="https://us3.ca.analytics.ibm.com/bi/?perspective=authoring&id=i2917BC1A2E09472EBD7C39E52CF7E938&objRef=i2917BC1A2E09472EBD7C39E52CF7E938&action=run&format=HTML&cmPropStr=%7B%22id%22%3A%22i2917BC1A2E09472EBD7C39E52CF7E938%22%2C%22type%22%3A%22report%22%2C%22defaultName%22%3A%22Retail%20Stock%20Report%22%2C%22permissions%22%3A%5B%22execute%22%2C%22read%22%2C%22setPolicy%22%2C%22traverse%22%2C%22write%22%5D%7D">Report 2</a>
  </div>
</div> 
    <a href = "https://us3.ca.analytics.ibm.com/bi/?perspective=dashboard&id=i93A0B8783218492E81EBC18155D0B788&objRef=i93A0B8783218492E81EBC18155D0B788&options%5BdisableGlassPrefetch%5D=true&options%5Bcollections%5D%5BcanvasExtension%5D%5Bid%5D=com.ibm.bi.dashboard.canvasExtension&options%5Bcollections%5D%5BfeatureExtension%5D%5Bid%5D=com.ibm.bi.dashboard.core-features&options%5Bcollections%5D%5Bbuttons%5D%5Bid%5D=com.ibm.bi.dashboard.buttons&options%5Bcollections%5D%5Bwidget%5D%5Bid%5D=com.ibm.bi.dashboard.widgets&options%5Bcollections%5D%5BcontentFeatureExtension%5D%5Bid%5D=com.ibm.bi.dashboard.content-features&options%5Bcollections%5D%5BsaveServices%5D%5Bid%5D=com.ibm.bi.dashboard.saveServices&options%5Bcollections%5D%5Btemplates%5D%5Bid%5D=com.ibm.bi.dashboard.templates&options%5Bcollections%5D%5BvisualizationExtension%5D%5Bid%5D=com.ibm.bi.dashboard.visualizationExtensionCA&options%5Bcollections%5D%5BboardModel%5D%5Bid%5D=com.ibm.bi.dashboard.boardModelExtension&options%5Bcollections%5D%5BcontentTypes%5D%5Bid%5D=com.ibm.bi.dashboard.contentTypes&options%5Bcollections%5D%5BserviceExtension%5D%5Bid%5D=com.ibm.bi.dashboard.serviceExtension&options%5Bcollections%5D%5BlayoutExtension%5D%5Bid%5D=com.ibm.bi.dashboard.layoutExtension&options%5Bcollections%5D%5BcolorSetExtensions%5D%5Bid%5D=com.ibm.bi.dashboard.colorSetExtensions&options%5Bconfig%5D%5Bproduct%5D=CA&options%5Bconfig%5D%5BeditPropertiesLabel%5D=true&options%5Bconfig%5D%5BenableCustomVisualizations%5D=true&options%5Bconfig%5D%5BassetTags%5D%5B%5D=dashboard&options%5Bconfig%5D%5BfilterDock%5D=true&options%5Bconfig%5D%5BshowMembers%5D=true&options%5Bconfig%5D%5Bupgrades%5D=dashboard-core%2Fjs%2Fdashboard%2Fupgrades&options%5Bconfig%5D%5BassetType%5D=exploration&options%5Bconfig%5D%5BgeoService%5D=CA&options%5Bconfig%5D%5BsmartTitle%5D=true&options%5Bconfig%5D%5BnavigationGroupAction%5D=true&options%5Bconfig%5D%5BenableDataQuality%5D=false&options%5Bconfig%5D%5BmemberCalculation%5D=false&isAuthoringMode=false&boardId=i93A0B8783218492E81EBC18155D0B788">
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