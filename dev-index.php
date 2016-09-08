

<!DOCTYPE html>

<html id = "mainPage" lang="zh-CN" xmlns:wb="http://open.weibo.com/wb">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type"
	content="text/html; charset=windows-1252">
<!-- Enable Mobile Version !!!     <meta name="viewport" content="width=device-width, initial-scale=1">      -->

<title>Victutor - 维多利亚家教网 !</title>
<link rel="stylesheet" href="./lib/CSS/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="./CSS/custom.css">
<link type="text/css" rel="stylesheet" href="./CSS/index.css" />
<link href="./Images/favicon.ico" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
<script type="text/javascript" src="./javascript/victutor.js"></script>
<script src="./lib/Javascript/jquery.min.js"></script>
<script type="text/javascript" src="./lib/Javascript/ajaxupload.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./javascript/victutor.functions.js"></script>
<script type="text/javascript" src="./javascript/victutor.list.js"></script>
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="./javascript/bootstrap-select.js"></script>
<script type="text/javascript" src="./lib/Javascript/jquery.roundabout.js"></script>
<!-- Google tracking 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81667903-1', 'auto');
  ga('send', 'pageview');
</script>
-->


<style>
html, body, h1, h2, h3, h4, h5 {
	font-family: "Lato", sans-serif
}
</style>
</head>
<body style="background-color:skyblue">
	<nav id = "TopNavBar" class="w3-xlarge navbar-inverse navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	<span><img style = "margin-top:7px;margin-right:6px" class = "w3-left" src = "./Images/Victutor_Icon_White.png" alt = "Victutor_Icon" width = "10%"></span>
      <a class="w3-xlarge navbar-brand" href="index.php"><font size = "6" color="white">VICTUTOR.com</font></a>
    </div>
    <ul class="w3-right nav navbar-nav ">
      <li><a class = "w3-hover-red" onclick="document.getElementById('aboutusModal').style.display='block'"><font color="white">
	  <i><b>加入我们&nbsp;&nbsp;<i class="fa fa-users" aria-hidden="true"></i></b></i></font></a></li> 
	  <li><a class = "w3-hover-red" onclick="document.getElementById('ContactUsModal').style.display='block'"><font color="white">
	  <i><b>联系我们&nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i></b></i></font></a></li>
    </ul>
  </div>
</nav>
	<!-- Contact staff button -->
	<div id = "serviceButton" class="w3-theme-border w3-animate-left"
		style="position: fixed; left:0px ;top:450px; z-index: 999;display:none">
			<button onmouseover = "victutor.functions.ShowHideServerPanel(1)"
				class="w3-center w3-border w3-hover-grey w3-light-grey w3-btn w3-large"><b>联<br>系<br>客<br>服</b>
			</button>
	</div>
	
	<!-- Contact staff slidng panel -->
	<nav id = "services" class="w3-sidenav Server-Panel w3-light-grey">
		<a onclick="victutor.functions.ShowHideServerPanel(0)" class="w3-right w3-closenav ">Close &times;</a>
		<p class = "w3-left w3-large" style = "margin:0"><b>寻找太麻烦？</b></p>
		<img class = "w3-left" style="width: 80px;height: 80px;" src="./Images/img_avatar3.png" style="width: 50%">
		<a onclick="document.getElementById('ContactUsModal').style.display='block'" 
		class = "w3-right" style = "padding-right:10px;padding-top:10px">点击联系我们<br>我们来帮您!<br>请联系客服</a>
	</nav>
    
	<div id="highsky">
        <div id="midground" class="wall"></div>
		<div class="w3-container wall" style="margin-left:-16px; margin-right:-16px">
			<div id = "searchToolPanel" class="w3-center">
				<h2 id = "bgtext" class = "w3-xxxlarge"> 维多利亚家教网
				<span><img src = "./Images/Victutor_Icon_White.png" alt = "Victutor_Icon" width = "10%"></span>
				</h2>
				<!--<button class="bgbutton w3-hover-red w3-teal w3-btn"><b class = "w3-large">查找家教</b></button>-->
				<div style = "margin-top:30px">
				    <select id = "Fselecter" class="selectpicker show-tick show-menu-arrow" data-width="400px" title="选择专业"
				    data-live-search="true" ></select>
				    <button class="w3-teal w3-xlarge w3-btn w3-hover-red" style = "margin-left:20px"
				    onclick = "victutor.functions.GetTutorByFaculty()">搜索家教&nbsp;
				    <i class="fa fa-search" aria-hidden="true"></i>
				    </button>
				</div>
			</div>

            <div id = "downward" class="w3-center w3-bottom" data-toggle="gonext" title="See Our Recommands">
                <button class = "Faculty glyphicon glyphicon-cloud w3-hover-text-teal w3-xxxlarge" 
                    href="#TeamList" style="border: none; background: none;outline: none; width:10%; color:#009688">
                </button>
            </div>
		</div>
    </div>
	<!-- Content -->
    <div id="landing-content" style="margin-left:-16px; margin-right:-16px">
	    <div>
		    <!-- Grid -->
		    <div id="TeamList" class="w3-row-padding" style="margin: 0 -16px">
			    <div class="w3-center w3-padding-64">
				    <h2 style="color:#ffffff">推荐家教</h2>
                    <div id="gla">
	                    <div id="gla_box">
                        <span class="prev fa fa-5x fa-chevron-left w3-left" style="margin-left:-220px; margin-top:200px; color:white"></span>
			            <span class="next fa fa-5x fa-chevron-right w3-right" style="margin-right:-220px;margin-top:200px;color:white"></span>
    	                    <ul id="img-slider">
        	                        <li><div class="T00 w3-border"></div></li>
        	                        <li><div class="T01 w3-border"></div></li>
        	                        <li><div class="T02 w3-border"></div></li>
        	                        <li><div class="T03 w3-border"></div></li>
        	                        <li><div class="T04 w3-border"></div></li>
                                </ul>
                            </div>
                        </div>
			    </div>
		    </div>
		</div>
	</div>
	<!-- Fixed Button -->
	<div class="w3-theme-border" id = "GoToTopButton"
		style="display:none;position: fixed; padding: 5px; bottom: 60px; right: 35px; height: 50px; z-index: 999">
		<button class="w3-hover-text-teal w3-xxxlarge w3-animate-right glyphicon glyphicon-chevron-up"
			data-toggle="gotop" title="Go to Top"
			style="padding: 0; border: none; background: none; outline: none;color:white"
			onclick="victutor.functions.gotoTop()">
	</div>
	
	<!-- Footer -->
	<footer id = "test" class="w3-container w3-padding-10 w3-blue-grey w3-center" style = "z-index:-1">
		<h4 id = "CurrentTime"></h4>
		<!--<wb:share-button count="n" type="button" size="big" ></wb:share-button>-->
		<p>
		<span><a href = "#" ><b class = "w3-text-white">免责声明</b></a></span>
		<span> ｜ <a href = "#" ><b class = "w3-text-white">广告服务</b></a></span>
		</p>
		<p>友情链接: 
		<span><a class = "w3-text-white" href="http://www.victoriabbs.com" _fcksavedurl="http://www.victoriabbs.com" title="维多利亚华人论坛 - 维多利亚中文门户网站" target="_blank">维多利亚华人论坛 &nbsp</a></span>
		<span><a class = "w3-text-white" href="http://www.victoriabbs.com" _fcksavedurl="http://www.victoriabbs.com" target="_blank"> <img src="http://www.victoriabbs.com/images/victoriabbslink.gif" _fcksavedurl="http://www.victoriabbs.com/images/victoriabbslink.gif" border="0" alt="VictoriaBBS.com - 维多利亚中文门户网站"></a>
		</span>
		</p>
		<p>© Vcitutor.com beta 1.00.00 - 2016 VICTUTOR ALL RIGHTS RESERVED</p>
	</footer>

	<!-- 1. Aboutus modal -->
	<div id="aboutusModal" class="w3-modal" style = "z-index:999">
		<div class="w3-modal-content w3-animate-top w3-card-8">
			<header class="w3-container w3-teal">
				<span
					onclick="document.getElementById('aboutusModal').style.display='none'"
					class="w3-closebtn">&times;</span>
				<h2 class="w3-center w3-lobster">加入我们的团队</h2>
			</header>
			<div class="w3-container"
				style="postion: absolute; margin-top: <30px></30px>">
				<form action="uploadtxt.php" method="post">
				<div class = "w3-row-padding" style = "height:380px">
					<div class = "w3-half">
						<div class="w3-group w3-half">
							<label>姓名:</label> <input
								class="w3-round w3-input w3-border w3-hover-border-black"
								style="width: 80%;" type="text" name="name" />
						</div>
						<div class="w3-group w3-half">
							<label>电话:</label> <input
								class="w3-round w3-input w3-border w3-hover-border-black"
								style="width: 80%;" type="text" name="phone" />
						</div>
						<div class="w3-group w3-half">
							<label>微信:</label> <input
								class="w3-round w3-input w3-border w3-hover-border-black"
								style="width: 80%;" type="text" name="wechat" />
						</div>
						<div class="w3-group w3-half">
							<label>学科:</label> <input
								class="w3-round w3-input w3-border w3-hover-border-black"
								style="width: 80%;" type="text" name="subject" />
						</div>
                        <div class="w3-group w3-half">
							<label>邮箱:</label> <input
								class="w3-round w3-input w3-border w3-hover-border-black"
								style="width: 180%;" type="text" name="email" />
						</div>
					</div>
					<div class = "w3-half">
						
						<div class="w3-group">
								<img id = "ImgUpLoad" class = "w3-center" src="./Images/Imgupload.png" alt="WeChat"
								style="width: 170px;margin-left: 50px;margin-bottom: 30px;">
								<label style = "margin-left: 25px;display:block">
								<i id = "imgSpinner" class="fa fa-spinner fa-spin" style="font-size:24px;display: none"></i>
								请上传微信二维码：<input class = "w3-teal w3-btn"
								style = "display:inline-block" type="button" value="选取图片" id="selector" /></label>
								
								<br />
								<label>选择的图片路径：</label><input style = "border-style:none;" type="text" readonly="readonly" value="" id="filepath" />
								<input style = "display:none" type="button" value="上传" id="up" />
								<br />
								<label>上传状态和结果：</label><input style = "border-style:none;" type="text" readonly="readonly" value="" id="state" />
						</div>
					</div>
                </div>

				<div class = "w3-center" style = "margin-bottom:10px">
					<button type="submit" class="w3-large w3-teal w3-btn w3-padding-10">Submit</button>
				</div>
				</form>
				
			</div>
			<footer class="w3-container w3-teal">
				<p class="w3-center w3-lobster ">www.Victutor.com</p>
			</footer>
		</div>
	</div>

	<!-- Contact -->
		<div id="ContactUsModal" class="w3-modal" style = "z-index:999">
			<div class="w3-modal-content w3-animate-top w3-card-8">
				<header class="w3-container w3-teal">
					<span
						onclick="document.getElementById('ContactUsModal').style.display='none'"
						class="w3-closebtn">&times;</span>
					<h2 class="w3-center w3-lobster">联系我们</h2>
				</header>
				<div id="contact" class="w3-large container-fluid bg-grey" style = "margin-bottom:100px;margin-top:100px">
					<div class="row">
						<div class="col-sm-5" style="left: 150px">
							<p style="margin-bottom: 25px">
								<span class="glyphicon glyphicon-map-marker"></span> 地址：University of
								Victoria
							</p>
							<p style="margin-bottom: 25px">
								<span class="glyphicon glyphicon-phone"></span> 电话：778 922 5080
							</p>
							<p style="margin-bottom: 25px">
								<span class="glyphicon glyphicon-envelope"></span> 邮箱：waynez@uvic.ca
							</p>
							<p style="margin-bottom: 25px">
								<span class="glyphicon glyphicon-user"></span> 微信：wayne-zhangyuwei
							</p>
						</div>
						<div class="col-sm-3 slideanim" style="left: 200px">
							<img src="./Images/Wechat.png" class="btn-social" alt="WeChat"
								style="width: 90%">
						</div>
					</div>
				</div>
				<footer class="w3-container w3-teal">
				<p class="w3-center w3-lobster ">www.Victutor.com</p>
			</footer>
			</div>
		</div>

		

	<!-- 2. CSC List modal -->
		<div id="TutorList" class="w3-modal" style = "padding-top:55px">
			<div id="ListOfTutor" style = "z-index:999"></div>
		</div>

    <!-- 3. Tutor Detail modal -->
        <div id = "RecommendTutorDetail" class = "w3-modal" style = "z-index:999">
            <div id = "TutorDetailRecommend">
            </div>
        </div>

	
		<div id="searchAlert" class="w3-modal">
			<div class="w3-modal-content w3-animate-top w3-card-8" style = "width:30%">
				<header class="w3-container w3-red">
				<span onclick="document.getElementById('searchAlert').style.display='none'"
				class="w3-closebtn">&times;</span>
				<h2 class = "w3-red">错误！<br/>搜索科目不能为空，请重新输入</h2>
				</header>
			</div>
		</div>
</body>
</html>





