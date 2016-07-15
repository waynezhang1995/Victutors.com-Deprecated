

<!DOCTYPE html>

<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type"
	content="text/html; charset=windows-1252">
<!-- Enable Mobile Version !!!     <meta name="viewport" content="width=device-width, initial-scale=1">      -->

<title>Victutor - All you need is to find a tutor !</title>
<link rel="stylesheet" href="./lib/CSS/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="./CSS/custom.css">
<link href="./Images/favicon.ico" rel="icon" type="image/x-icon" />

<script src="./lib/Javascript/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./javascript/slider.js"></script>
<script type="text/javascript" src="./javascript/functions.js"></script>

<style>
html, body, h1, h2, h3, h4, h5 {
	font-family: "Lato", sans-serif
}
</style>
</head>
<body onresize="ReSize()">
	<!-- Navbar -->
	<ul
		class="w3-navbar w3-left-align w3-dark-grey w3-center w3-top w3-xlarge" id = "TopNavBar">
		<li class="w3-left inactiveLink" style="width: 16.6% !important">
        <img src="./Images/logo.png" style="max-width:100%;max-height:100%;height:50px"></li>
		<li class="w3-left" style="width: 16.6% !important"><a id="Faculty"
			style="color: white" href="#FacultyList"><i><b>辅导学科</b></i></a></li>
		<li class="w3-left" style="width: 16.6% !important"><a id="Price"
			style="color: white" href="#PriceList"><i><b>家教价格</b></i></a></li>
		<li class="w3-left" style="width: 16.6% !important"><a id="Team"
			style="color: white" href="#TeamList"><i><b>推荐家教</b></i></a></li>
		<li class="w3-left" style="width: 16.6% !important"><a
			style="color: white" 
			onclick="document.getElementById('aboutusModal').style.display='block'"><i><b>加入我们</b></i></a></li>
		<li class="w3-left" style="width: 16.6% !important"><a id="JoinUs"
			style="color: white" href="#Contact"><i><b>联系方式</b></i></a></li>
	</ul>

	<!-- header -->
	<header class="container-fluid" style="margin-top: 100px">

		<h1 class="w3-center w3-lobster w3-xxxlarge">
			<span data-toggle="title" title="alpha">Victutor.com</span>
		</h1>
	</header>

	<!-- Content -->
	<div class="w3-content w3-container"
		style="max-width: 1000px; margin-top: 70px; margin-bottom: 70px">
		<!-- Slideshow -->
		<div class="w3-display-container mySlides"
			style="margin-top: 10px; display: none;">
			<img class="w3-animate-left" src="./Images/img_coffee.jpg"
				style="width: 100%; height: 300px">
		</div>
		<div class="w3-display-container mySlides"
			style="margin-top: 10px; display: none;">
			<img class="w3-animate-left" src="./Images/img_workbench.jpg"
				style="width: 100%; height: 300px">
		</div>
		<div class="w3-display-container mySlides"
			style="margin-top: 10px; display: block;">
			<img class="w3-animate-left" src="./Images/img_sound.jpg"
				style="width: 100%; height: 300px">
		</div>

		<!-- Slideshow next/previous buttons -->
		<div class="w3-center w3-container w3-dark-grey w3-padding-60"
			style="margin-top: 5px; width: 100%">
			<div class="w3-left w3-hover-text-teal w3-large"
				onclick="plusDivs(-1)">&#10094;</div>
			<div class="w3-right w3-hover-text-teal w3-large"
				onclick="plusDivs(1)">&#10095;</div>

			<div class="w3-center">
				<span
					class="w3-tag demodots w3-border w3-transparent w3-hover-white"
					onclick="currentDiv(1)"></span> <span
					class="w3-tag demodots w3-border w3-transparent w3-hover-white"
					onclick="currentDiv(2)"></span> <span
					class="w3-tag demodots w3-border w3-transparent w3-hover-white w3-white"
					onclick="currentDiv(3)"></span>
			</div>
		</div>

		<!-- Grid -->
		<div id="FacultyList" class="w3-container w3-padding-64 w3-center">
			<span
				class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">
				辅导课程</span>

			<div class="w3-row " style="margin-top: 100px">
				<br>
				<div id = "CSC"></div>
				<div id = "MATH"></div>
				<div id = "ECON"></div>
				<div id = "STATS"></div>
			</div>
		</div>

		<!-- Grid -->
		<div id="PriceList" class="w3-row-padding" style="margin: 0 -16px">
			<div class="w3-center w3-padding-64" style="margin: -16px">
				<span
					class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">
					家教价格</span>
				<!-- <p>COMING SOON!</p> -->
			</div>
			<div id = "Plist01" class="w3-third w3-margin-bottom"></div>
			<div id = "Plist02" class="w3-third w3-margin-bottom"></div>
			<div id = "Plist03" class="w3-third w3-margin-bottom"></div>
		</div>

		<!-- Grid -->
		<div id="TeamList" class="w3-row-padding" style="margin: 0 -16px">
			<div class="w3-center w3-padding-64">
				<span
					class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">
					推荐家教</span>
			</div>

			<div  class="w3-third w3-margin-bottom T01"></div>
			<div  class="w3-third w3-margin-bottom T02"></div>
			<div  class="w3-third w3-margin-bottom T03"></div>
		</div>

		<!-- Contact -->
		<div id="Contact" class="w3-center w3-padding-64">
			<span
				class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">联系方式<br></span>
		</div>
		<div id="contact" class="w3-large container-fluid bg-grey">
			<div class="row">
				<div class="col-sm-5" style="left: 150px">
					<p style="margin-bottom: 25px">
						<span class="glyphicon glyphicon-map-marker"></span> University of
						Victoria
					</p>
					<p style="margin-bottom: 25px">
						<span class="glyphicon glyphicon-phone"></span> 778 922 5080
					</p>
					<p style="margin-bottom: 25px">
						<span class="glyphicon glyphicon-envelope"></span> waynez@uvic.ca
					</p>
					<p style="margin-bottom: 25px">
						<span class="glyphicon glyphicon-user"></span> 微信：something
					</p>
				</div>
				<div class="col-sm-3 slideanim" style="left: 200px">
					<img src="./Images/Wechat.png" class="btn-social" alt="WeChat"
						style="width: 170px">
				</div>
			</div>
		</div>

	</div>
	<!-- Fixed Button -->
	<div class="w3-theme-border"
		style="position: fixed; padding: 5px; bottom: 0; right: 10px; height: 100px; z-index: 999">
		<button class="glyphicon glyphicon-menu-up w3-xxlarge"
			data-toggle="gotop" title="Go to Top"
			style="padding: 0; border: none; background: none; outline: none"
			onclick="gotoTop()">
			<b></b></a>
	
	</div>

	<!-- Footer -->
	<footer class="w3-container w3-padding-10 w3-light-grey w3-center">
		<h4>Sun Jul 10, 2016 8:27 am</h4>
		<p>© Vcitutor.com alpha 1.00.01 - 2016 VICTUTOR ALL RIGHTS RESERVED</p>
	</footer>




	<!-- Popup modal area 
	       1. about us modal
	       2. CSC member list modal
	-->
	<!-- 1. Aboutus modal -->
	<div id="aboutusModal" class="w3-modal">
		<div class="w3-modal-content w3-animate-top w3-card-8">
			<header class="w3-container w3-teal">
				<span
					onclick="document.getElementById('aboutusModal').style.display='none'"
					class="w3-closebtn">&times;</span>
				<h2 class="w3-center w3-lobster">加入我们的团队</h2>
			</header>
			<div class="w3-container"
				style="postion: absolute; length: 500px; height: 400px; margin-top: 30px">
				<h>请把您的联系方式email给我们! 我们将在第一时间回复 </h>
				<form>
					<div class="w3-group">
						<label>Name</label> <input
							class="w3-input w3-border w3-hover-border-black"
							style="width: 100%;" type="text">
					</div>
					<div class="w3-group">
						<label>Subject</label> <input
							class="w3-input w3-border w3-hover-border-black"
							style="width: 100%;" type="text" id="subject">
					</div>
					<div class="w3-group">
						<label>Content</label>
						<textarea class="w3-input w3-border w3-hover-border-black"
							style="resize: none;" id="content"></textarea>
					</div>
					<button type="button" class="w3-teal w3-btn w3-right w3-padding-12"
						onclick="SendEmail()">Send</button>
				</form>
			</div>
			<footer class="w3-container w3-teal">
				<p class="w3-center w3-lobster ">www.Victutor.com</p>
			</footer>
		</div>
	</div>
	<!-- 2. CSC List modal -->
	<div id="TutorList" class="w3-modal">
		<div id="ListOfTutor"></div>
	</div>
</body>
</html>