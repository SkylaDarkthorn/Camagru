<?PHP session_start();
	ini_set('display_errors',0);
  ?>

<!DOCTYPE html>
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Merienda+One');
@import url('https://fonts.googleapis.com/css?family=Open+Sans');

</style>
<link rel="stylesheet" type="text/css" href="css/global.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<meta name="google" content="notranslate" />
<title>Home - Camagru</title>
</head>


<body>
  <?php
	$current_page = "Home";
  include "header.php";
	echo $_SESSION['Login'];
  ?>
  <div class="center">

  <!-- <p class="text">Welcome to Camagru.</p><br/> -->
    <br/>
    <h1>Welcome to Camagru</h1>
    <br/>
<p class="text">Inspired by the people, and built for the people.
This is a website dedicated to overlaying fixtures over photographs.</p>
<p class="text"></p>
<p class="text"></p>
<p class="text"></p> 
<p class="text"></p>
<p class="text"></p> 
<p class="text"></p>
<p class="text"></p>
<br/><br/>
<br/><br/>

<!-- <p class="text">This block of text is just a test</p></div> -->
<p class="text"></p>
<p class="text"></p>
<p class="text"></p>
<p class="text"></p>
<p class="text"></p> 
<p class="text"></p>
<br/><br/>
<br/><br/>
<br/><br/>
<br/><br/>
</body>
<?php
include 'footer.php';
 ?>
</html>
