<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
 require_once 'php/connect.php'; require_once 'php/functions.php';
?>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

		<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
<!DOCTYPE html>
<html lang="en">
<style>
body{
  font: 15px/1.5 Arial, Helvetica,sans-serif;
}
</style>
<head>
	<meta charset="UTF-8">
	<title>Comment and reply system in PHP</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="js/global.js"></script>
	<link rel="stylesheet" href="./css/main.css">
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <title>High-Fliers | Welcome</title>

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
  <h1><center><b>Bill Gates Success Story</b><br><br></center>
  
  <img src="https://awakenthegreatnesswithin.com/wp-content/uploads/2016/06/BG-696x468.jpg" style="margin-left:300px;%" align="middle"><br><br><br>
  <p style="font-size:15px; margin-left:30px; margin-right:30px" align="centre">Bill Gates is an American entrepreneur, programmer, investor and philanthropist. He and Paul Allen co-founded Microsoft which is the #1 software company in the world.<br> In 2015 their revenue was $93.6 billion. Bill Gates is the richest man on earth with a net worth of $76 billion. He was the CEO of Microsoft until January 2000, currently he is the Technology Advisor to CEO Satya Nadella. He focuses a lot of his time on the Bill & Melinda Gates Foundation, that is why he has taken a less demanding role at Microsoft so that he can focus more on philanthropy.
  <hr>
  Early Life
  <p style="font-size:15px; margin-left:30px; margin-right:30px" align="centre" >Bill Gates was born in Seattle, Washington on the 28th of October 1955. His father is William H. Gates Sr and his mother is Mary Maxwell Gates. He has one older sister Kristi Gates and one younger sister Libby Gates. At the age of 13 he enrolled in Lakeside School a private preparatory school. While at that school he took an interest in programming the General Electric system in BASIC and was excused from classes to pursue his interest. He built his first computer program on the General Electric machine. Gates met Paul Allen at the school and they worked together to find bugs in the PDP-10 system belonging to Computer Center Corporation. Gates, Paul and two other students wrote a payroll program for Information Sciences in exchange for computer time and royalties. After that it lead on to his school becoming fully aware of his programming skills, he created a program to schedule students in classes.
<br>
At the age of 17 he and Paul started a venture called Traf-O-Data, to make traffic counters based on Intel 8008 processors. Gates graduated from Lakeside School in 1973 and was a National Merit Scholar, he scored 1590 out of 1600 on the SAT. He enrolled at Harvard College in the autumn of 1973 where he met Steve Ballmer. Gates did not have a study plan at Harvard but spent a lot of time using the computers. In 1974 he joined Paul Allen at Honeywell. In 1975 the MITS Altair 8800 based on Intel’s 8080 CPU was released. Bill and Paul saw this as an opportunity to start their own software company.
  <br><br><br>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cbb04bfa4f26d42"></script>
  Click 
  
 
 <a href="https://api.whatsapp.com/send?text=Hi, Please visit my Website to motivate yourself by reading the Success story of Bill Gates" class="social-icon whatsapp">Here</a> to share the story
 
<div class="page-container" style="margin-left:160px;">
			<?php 
				get_total();
				require_once 'php/check_com.php';
			?>
			<form action="" method="post" class="main">
				<label>enter a brief comment</label>
				<textarea class="form-text" name="comment" id="comment"></textarea>
				<br />
				<input type="submit" class="form-submit" name="new_comment" value="post">
			</form>
			<?php get_comments(); ?>
		</div>
 
 
 