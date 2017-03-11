
<!DOCTYPE html>

<html id = "mainPage" lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type"
	content="text/html; charset=windows-1252">
<!-- Enable Mobile Version !!!     <meta name="viewport" content="width=device-width, initial-scale=1">      -->

<title>victutors - 维多利亚家教网 !</title>
<link rel="stylesheet" href="./lib/CSS/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="./CSS/custom.css">
<link href="./Images/favicon.ico" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
<script type="text/javascript" src="./javascript/victutors.js"></script>
<script src="./lib/Javascript/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./javascript/victutors.database.js"></script>
<script type="text/javascript" src="./javascript/victutors.list.js"></script>
<script type="text/javascript" src="./javascript/bootstrap-select.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<style>
html, body, h1, h2, h3, h4, h5 {
	font-family: "Lato", sans-serif
}
</style>
</head>

	<div class = "w3-container">
		<nav id = "TopNavBar" class="w3-xlarge navbar-inverse navbar navbar-fixed-top w3-white">
		<div class="container-fluid">
			<div class="navbar-header">
			<a href = "index.php"><img id = "victutors_icon" style = "float:left;margin-top:9px;margin-right:6px" class = "w3-left" src = "./Images/victutors_icon.png" alt = "victutors_Icon" width = "10%">
			<a class="w3-xlarge navbar-brand" href="index.php"><font color="black">victutors.com</font></a>
			</div>
			<ul class="w3-right nav navbar-nav " style = "right:0px;position:absolute">
			<li><a class = "w3-hover-red" onclick="document.getElementById('ContactUsModal').style.display='block'"><font color="black">
			<i><b>联系我们&nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i></b></i></font></a></li>
			<li><a class = "w3-hover-red" onclick="document.getElementById('FeedbackModal').style.display='block'"><font color="black">
			<i><b>问题反馈&nbsp;&nbsp;<i class="fa fa-comment-o" aria-hidden="true"></i></b></i></font></a></li>
			</ul>
		</div>
		</nav>
	</div>
	
<body id = "mainbody" style = "zoom:90%">
	<!-- Content -->
	<div id = "mainContent" class="w3-content w3-container" style="max-width: 1080px; margin-top: 70px; margin-bottom: 100px">
        <div class = "container-fluid">
            <div>
                <div class="w3-card-8" style="background-color:red; border:none">
                    <h2 style="color:white"><b>免责声明:</b></h2>
					<h3 style="color:white"><b>因为资源有限,目前只提供CSC课程相关资料.对您照成的不便我们深感歉意.</b></h3>
                    <p style="color:white">Victutors创建本题库只为内部学习交流使用，不得用于任何商业用途</p>
                    <p style="color:white">本题库试题作业资源由各位CSC战友提供。资源来之不易，望各位战友万加珍惜</p>
                    <p style="color:white">同时也恳请各位战友匿名分享习题资源，学CSC不易，多一份习题，多一些拿高分的可能性</p>
                    <p style="color:white">部分题库资源可在UVic官网（www.uvic.ca）搜索找到</p>
                </div>
            </div>
			<div class="w3-card-12 w3-hover-shadow w3-white">
				<div class = "w3-row">
					<div class = "w3-col m6">
						<div class = "w3-center w3-container">
							<h2 style = "margin-bottom:30px" class = "w3-xxlarge">选择科目 <i class="fa fa-search" aria-hidden="true"></i></h2>
							<select id = "selecter" class="selectpicker show-tick show-menu-arrow" data-width="400px" title="请选择科目,文件类型后点击搜索"
							data-live-search="true" ></select>
						</div>
					</div>
					<div class = "w3-col m3">
					<ul style = "text-align:left !important; margin-left:20%; margin-top:10%; list-style-type: none;" class = "w3-center">
						<li style = "margin-top:10%">
							<input id = "filter_all" type="checkbox" data-toggle="toggle" data-on="ALL" data-off="ALL" data-width="120">
						</li>
						<li style = "margin-top:10%">
							<input id = "filter_assignment" type="checkbox" data-toggle="toggle" data-on="Assignment" data-off="Assignment" data-width="120">
						</li>
						<li style = "margin-top:10%">
							<input id = "filter_exam" type="checkbox" data-toggle="toggle" data-on="Exam" data-off="Exam" data-width="120">
						</li>
					</ul>
					</div>
					<div class = "w3-center w3-col m3">
						<button onclick = "victutors.database.getDoc()" style = "margin-right:10px;margin-top:30%" class="w3-hover-red w3-teal w3-btn w3-xlarge">搜索</button>
						<button onclick = "victutors.database.getDocAll()" style = "margin-top:30%" class="w3-hover-red w3-teal w3-btn w3-xlarge">显示全部</button>
					</div>
				</div>
			</div>	
		</div>

		<div id = "docList" class = "container-fluid">
			
		</div>
	</div>

	<!-- Fixed Button -->
	<div class="w3-theme-border" id = "GoToTopButton"
		style="display:none;position: fixed; padding: 5px; bottom: 60px; right: 35px; height: 50px; z-index: 999">
		<button class="w3-text-white w3-hover-text-teal w3-xxxlarge w3-animate-right glyphicon glyphicon-chevron-up"
			data-toggle="gotop" title="Go to Top"
			style="padding: 0; border: none; background: none; outline: none;color:black"
			onclick="victutors.database.gotoTop()">
	</div>
	

	<!-- Footer -->
	<footer id = "footerpanel" class="w3-container w3-padding-10 w3-center" style = "z-index:-1">
		<p style = "margin-top:10px">
		<span><a href = "#" ><b class = "w3-text-white">免责声明</b></a></span>
		<span><b class = "w3-text-white"> ｜ </b><a href = "#" ><b class = "w3-text-white">广告服务</b></a></span>
		</p>
		<p class = "w3-text-white">© Victutor.com - VICTUTORS ALL RIGHTS RESERVED</p>
	</footer>

	<div id="searchAlert" class="w3-modal">
		<div class="w3-modal-content w3-animate-top w3-card-8" style = "width:30%">
			<header class="w3-container w3-red">
			<span onclick="document.getElementById('searchAlert').style.display='none'"
			class="w3-closebtn">&times;</span>
			<h2 class = "w3-red">错误！<br/>搜索科目不能为空，请重新输入</h2>
			</header>
		</div>
	</div>

	<div id="emptyAlert" class="w3-modal">
		<div class="w3-modal-content w3-animate-top w3-card-8" style = "width:30%">
			<header class="w3-container w3-red">
			<span onclick="document.getElementById('emptyAlert').style.display='none'"
			class="w3-closebtn">&times;</span>
			<h2 class = "w3-red">对不起！<br/>我们暂时还没有资料，请联系我们</h2>
			</header>
		</div>
	</div>

	<!--feedback --> 
	<div id="FeedbackModal" class="w3-modal" style = "z-index:999">
		<div class="w3-modal-content w3-animate-top w3-card-8">
			<header class="w3-container w3-teal">
				<span
					onclick="document.getElementById('FeedbackModal').style.display='none'"
					class="w3-closebtn">&times;</span>
				<h2 class="w3-center w3-lobster">意见反馈</h2>
			</header>
			<div class="w3-container"
				style="postion: absolute;">
				<div class = "w3-row-padding" style = "height:380px">
						<div class="w3-group">
							<label class = "w3-large">您想搜索的学科?</label> <input id = "feedback_subject"
								class="w3-round w3-input w3-border w3-hover-border-black"
								style="width: 100%;" type="text" name="subject_help" />
						</div>
						<div class="w3-center w3-group">
							<label class = "w3-large" style = "display:block;float:left"for = "introduction_help">您宝贵的意见:</label>
							<textarea id = "feedback_text" class="w3-round w3-input w3-border w3-hover-border-black" style="vertical-align: left;width: 100%;" rows = "4" cols="70" name="introduction_help" ></textarea>
						</div>
				<div class = "w3-center" style = "margin-bottom:10px">
					<button onclick = "victutors.database.sendFeedBack()" type="submit" class="w3-large w3-teal w3-btn w3-padding-10">Submit</button>
				</div>
				</div>
			</div>
			<footer class="w3-container w3-teal">
				<p class="w3-center w3-lobster ">www.victutors.com</p>
			</footer>
		</div>
	</div>

	<!-- database -->
	<!-- database -->
    <div id="databaseModal" class="w3-modal" style="z-index:999">
        <div class="w3-modal-content w3-animate-top w3-card-1">
            <header class="w3-container w3-teal">
                <h2 class="w3-center w3-lobster">资料分享</h2>
            </header>
            <div class="w3-container">
                <div class="w3-row-padding">
                    <div style="margin-top: 50px;width:50%; left:25%; top:50%" class="input-group">
                        <span class="input-group-addon" id="basic-addon3">密码: </span>
                        <input type="text" class="form-control" id="databasePassword" aria-describedby="basic-addon3">
                    </div>
                    <div class="w3-center" style="margin-top:50px;margin-bottom:10px">
                        <button onclick="victutors.database.DBlogin()" type="submit" style="margin-right:50px" class="w3-large w3-teal w3-btn w3-padding-10">登录题库</button>
                        <button id="QRCodepw" class="w3-large w3-teal w3-btn w3-padding-10">获取密码</button>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $("#QRCodepw").click(function () {
                                $("#databasepw").toggle(1000);
                            });
                        });
                    </script>
                    <div id="databasepw" class="w3-row w3-center" style="display:none;margin-top:20px;margin-bottom:30px">
                        <div style="text-align:center;" class="w3-col">
                            <h3>请扫描下侧二维码获取最新密码 😊 </h3>
                            <img src="./Images/WeChat.png" alt="WeChat">
                        </div>
                    </div>
                </div>
            </div>
            <footer class="w3-container w3-teal">
                <p class="w3-center w3-lobster ">www.victutors.com</p>
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
				<div id="contact" class="w3-large container-fluid bg-grey" style="margin-bottom:100px;margin-top:100px">
					<div class="row">
						<div class="w3-half">
							<p style="padding-left:80px;margin-bottom: 25px">
								<span class="glyphicon glyphicon-map-marker"></span> 地址：University of
								Victoria
							</p>
							<p style="padding-left:80px;margin-bottom: 25px">
								<span class="glyphicon glyphicon-phone"></span> 电话：778 922 5080
							</p>
							<p style="padding-left:80px;margin-bottom: 25px">
								<span class="glyphicon glyphicon-envelope"></span> 邮箱：info@victutors.com
							</p>
						</div>
						<div class="w3-half w3-center">
							<img src="./Images/WeChat.png" alt="WeChat"
								style="width: 35%">
						</div>
					</div>
				</div>
				<footer class="w3-container w3-teal">
				<p class="w3-center w3-lobster ">www.victutors.com</p>
			</footer>
			</div>
		</div>

		<div id="feedbackAlert" class="w3-modal">
			<div class="w3-modal-content w3-animate-top w3-card-8" style = "width:30%">
				<header class="w3-container w3-red">
				<span onclick="document.getElementById('feedbackAlert').style.display='none'"
				class="w3-closebtn">&times;</span>
				<h2 class = "w3-red">谢谢您的反馈😊<br/>感谢您长期以来的支持！</h2>
				</header>
			</div>
		</div>

		<div id="databaseErrorAlert" class="w3-modal" style = "z-index:99999">
			<div class="w3-modal-content w3-animate-top w3-card-8" style = "width:30%">
				<header class="w3-container w3-red">
				<span onclick="document.getElementById('databaseErrorAlert').style.display='none'"
				class="w3-closebtn">&times;</span>
				<h2 class = "w3-red">您输入的密码有误<br/>请重新输入</h2>
				</header>
			</div>
		</div>

</body>
</html>