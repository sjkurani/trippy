<?php
include("header.php");
?>
<html>
	<head>
	<link href='http://fonts.googleapis.com/css?family=Yeseva+One&subset=cyrillic' rel='stylesheet' type='text/css'>
	<script src="jquery.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
	<link rel="stylesheet" href="./css/mainimage.css"/>
	<link rel="stylesheet" href="./css/style3.css"/>

		<script>
			$(document).ready(function(){
				$(window).scroll(function(){
					if($(window).scrollTop() <= 580)
					{
								    $("#img6").css("left",Math.max(100,1000-$(this).scrollTop()));
								    $("#img12").css("left",Math.min(1000,-750+$(this).scrollTop()));
							  	   // $("#img16").fadeTo(0);
					}
					if($(window).scrollTop() < 8400)
					{
								  //  $("#img16").fadeTo("fast",+0.40);
								    $("#img15").css("left",Math.max(560,1700-$(this).scrollTop()));
								    $("#img17").css("left",Math.min(0,-1000+$(this).scrollTop()));
					}
					if($(window).scrollTop() == 840)
					{
					 //   $("#img16").fadeTo("slow",1);
					}
				});
			});
		</script>
</head>
<body>
<form>

	<div id="maincontent" style="width:79%;position: absolute;top:200px;left:170px;top:170px;background-color:transparent;color:blue;">
						
		<div class="hero">
		Quest is a series of educative travel plans brought to you by the TrippyBack Family.The Quest series of tailor made tours are designed to give students,teachers and young professionals in depth practical knowledge of their streams of profession and education.
		<br><center><span style="position:relative;top:80px;">Scroll Down</span><div id="scrolldown1"></div></center>
		</div>
		
		<section id="myimage">
		<img class="mainimg" src="./img/6.jpg" id="img6"/>
		<img class="mainimg" src="./img/12.jpg" id="img12"/>
		<img class="mainimg" src="./img/16.jpg" id="img16" />
		<img class="mainimg" src="./img/15.jpg" id="img15" />
		<img class="mainimg" src="./img/17.jpg" id="img17" />
		</section>
	</div>
</form>
<div style="position: absolute;top:1700px;height: 250px;width: 100%;">
<?
require "./quest.php";
?>
</div>
</body>
</html>
