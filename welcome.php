<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>High-Fliers | Welcome</title>
	
    <link rel="stylesheet" href="./css/style2.css">
<link rel="stylesheet" href="./css/style.css">
</head>
<body>

 <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">High</span>-Fliers</h1>
        </div>
        <nav>
          <ul>
            <li> Hey, <?php echo htmlspecialchars($_SESSION["username"]); ?></li>
            <li><a href="about.html">About</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </div>
  </header>	
  <!-- 1st row verticaly centered text in the square columns -->


<!-- 2nd row verticaly centered images in square columns -->

<div class="square">
   <div class="content">
        <div class="table">
            <div class="table-cell">
                <img class="rs" src="https://timedotcom.files.wordpress.com/2018/09/bill-gates-africa.jpg"/>
                Bill Gates is an American entrepreneur, programmer, investor and philanthropist. He and Paul Allen co-founded Microsoft which is the #1 software company in the world. In 2015 their revenue was $93.6 billion. Bill Gates is the richest man.... <a href="bg.php">(Read More)</a>
            </div>
        </div>
    </div>
</div>
<div class="square">
    <div class="content">
        <div class="table">
            <div class="table-cell">
               <img class="rs" src="https://cdn.dnaindia.com/sites/default/files/styles/full/public/2019/04/14/812900-724837-amitabhbachchan-083118.jpg"/>
                Amitabh Bachchan’s story from being Zero to Hero is not only inspiring Bollywood industry aspirants but also a positive vibration for fighting against rough trots.
            </div>
        </div>
    </div>
</div>
<div class="square">
   <div class="content">
        <div class="table">
            <div class="table-cell">
                <img class="rs" src="https://timedotcom.files.wordpress.com/2018/09/bill-gates-africa.jpg"/>
                Bill Gates is an American entrepreneur, programmer, investor and philanthropist. He and Paul Allen co-founded Microsoft which is the #1 software company in the world. In 2015 their revenue was $93.6 billion. Bill Gates is the richest man.... <a href="bg.php">(Read More)</a>
            </div>
        </div>
    </div>
</div>
</div>
<div class="square">
    <div class="content">
        <div class="table">
            <div class="table-cell">
               <img class="rs" src="https://cdn.dnaindia.com/sites/default/files/styles/full/public/2019/04/14/812900-724837-amitabhbachchan-083118.jpg"/>
                Amitabh Bachchan’s story from being Zero to Hero is not only inspiring Bollywood industry aspirants but also a positive vibration for fighting against rough trots.
            </div>
        </div>
    </div>
</div>