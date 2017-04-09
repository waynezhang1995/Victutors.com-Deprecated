<!DOCTYPE html>

<html id="mainPage" lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <!-- Enable Mobile Version !!!     <meta name="viewport" content="width=device-width, initial-scale=1">      -->

    <title>victutors - 维多利亚家教网 !</title>
    <link rel="stylesheet" href="./lib/CSS/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/custom.css">
    <link href="./Images/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
    <script type="text/javascript" src="./javascript/victutors.js"></script>
    <script src="./lib/Javascript/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./javascript/victutors.Tutorlist.js"></script>
    <script type="text/javascript" src="./javascript/victutors.list.js"></script>
    <script type="text/javascript" src="./javascript/bootstrap-select.js"></script>
    <script type="text/javascript" src="./javascript/victutors.utils.js"></script>
    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Lato", sans-serif
        }
    </style>
</head>

<div class="w3-container">
    <nav id="TopNavBar" class="w3-xlarge navbar-inverse navbar navbar-fixed-top w3-white">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php"><img id="victutors_icon" style="float:left;margin-top:9px;margin-right:6px" class="w3-left" src="./Images/victutors_icon.png" alt="victutors_Icon" width="10%">
                    <a class="w3-xlarge navbar-brand" href="index.php">
                        <font color="black">victutors.com</font>
                    </a>
            </div>
            <ul class="w3-right nav navbar-nav " style="right:0px;position:absolute">
                <li id="NavSearchPanel" style="margin-right:10px;margin-top:8px">
                    <select id="Fselecter" class="selectpicker show-tick show-menu-arrow" data-width="300px" title="选择专业" data-live-search="true"></select>
                    <button class="w3-teal w3-large w3-btn w3-hover-red" style="margin-left:20px" onclick="victutors.Tutorlist.GetTutorByFaculty()">搜索家教&nbsp;
						<i class="fa fa-search" aria-hidden="true"></i></button>
                </li>
                <li id="joinusModal">
                    <a class="w3-hover-red" onclick="document.getElementById('joinUsModal').style.display='block'">
                        <font color="black">
                            <i><b>成为家教&nbsp;&nbsp;<i class="fa fa-users" aria-hidden="true"></i></b>
                            </i>
                        </font>
                    </a>
                </li>
                <li id="contactModal">
                    <a class="w3-hover-red" onclick="document.getElementById('ContactUsModal').style.display='block'">
                        <font color="black">
                            <i><b>联系我们&nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i></b>
                            </i>
                        </font>
                    </a>
                </li>
                <li id="feedbackModal">
                    <a class="w3-hover-red" onclick="document.getElementById('FeedbackModal').style.display='block'">
                        <font color="black">
                            <i><b>问题反馈&nbsp;&nbsp;<i class="fa fa-comment-o" aria-hidden="true"></i></b>
                            </i>
                        </font>
                    </a>
                </li>
                <li id="qandaModal">
                    <a class="w3-hover-red" onclick="document.getElementById('FAQModal').style.display='block'">
                        <font color="black">
                            <i><b>疑难解答&nbsp;&nbsp;<i class="fa fa-question-circle" aria-hidden="true"></i></b>
                            </i>
                        </font>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- Contact staff button -->
<div id="serviceButton" class="w3-theme-border w3-animate-left" style="position: fixed; left:0px ;bottom:100px; z-index: 999;display:none">
    <button onmouseover="victutors.Tutorlist.ShowHideServerPanel(1)" class="w3-center w3-border w3-hover-grey w3-dark-grey w3-btn w3-large"><b>联<br>系<br>客<br>服</b>
			</button>
</div>

<!-- Contact staff slidng panel -->
<nav id="services" class="w3-sidenav Server-PanelTutorList w3-dark-grey" style="border:solid;border-width:thin;bottom:100px !important">
    <a onclick="victutors.Tutorlist.ShowHideServerPanel(0)" class="w3-right w3-closenav w3-text-white">Close &times;</a>
    <p class="w3-left w3-large w3-text-white" style="margin:0"><b>寻找太麻烦？</b></p>
    <img class="w3-left" style="width: 80px;height: 80px;" src="./Images/WeChat.png" style="width: 50%">
    <a onclick="document.getElementById('ContactUsModal').style.display='block'" class="w3-right w3-text-white" style="padding-right:10px;padding-top:10px">点击联系我们<br>我们来帮您!<br>请联系客服</a>
</nav>

<body id="mainbody" style="zoom:90%" onresize="victutors.Tutorlist.ReSize()">
    <!-- Content -->
    <div id="mainContent" class="w3-content w3-container">
        <p class="w3-text-white w3-xlarge" id="title" style="margin-top:20px;margin-bottom:20px"></p>
        <div id="searchTags">
        </div>
        <div id="TutorListAll" style="margin-top:0px;margin-bottom:50px">
        </div>
    </div>

    <!-- Fixed Button -->
    <div class="w3-theme-border" id="GoToTopButton" style="display:none;position: fixed; padding: 5px; bottom: 60px; right: 35px; height: 50px; z-index: 999">
        <button class="w3-text-white w3-hover-text-teal w3-xxxlarge w3-animate-right glyphicon glyphicon-chevron-up" data-toggle="gotop" title="Go to Top" style="padding: 0; border: none; background: none; outline: none;color:black" onclick="victutors.Tutorlist.gotoTop()">
	</div>

	<!-- Footer -->
	<footer id="footerpanel" class="w3-container w3-padding-10 w3-center" style="z-index:-1">
		<p style="margin-top:10px">
		<span><a href="#" ><b class = "w3-text-white">免责声明</b></a></span>
		<span><b class="w3-text-white"> ｜ </b><a href="#" ><b class="w3-text-white">广告服务</b></a></span>
		</p>
		<p class="w3-text-white">© Victutors.com - VICTUTORS ALL RIGHTS RESERVED</p>
	</footer>
    <?php include 'Include/modals.php'; ?>
    <?php include 'Include/alerts.php'; ?>
</body>

</html>