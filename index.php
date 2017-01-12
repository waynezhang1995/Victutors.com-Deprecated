

<!DOCTYPE html>

<!--

The MIT License (MIT)

Copyright (c) 2016 - Wayne Zhang, Zihan Ye.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

-->

<html id = "mainPage" lang="zh-CN">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type"content="text/html; charset=windows-1252">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Victutors.com - 维多利亚家教网">
<meta name="author" content="Wayne Zhang, Zihan Ye">
<meta name="keywords" content="Victutors,Victoria Tutor,Tutor,Uvic,University of Victoria,Camosun College,家教,维多利亚,补习,维多利亚家教网" />

<title>victutors - 维多利亚家教网 !</title>

<link rel="stylesheet" href="./lib/CSS/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="./CSS/custom.css">
<link type="text/css" rel="stylesheet" href="./CSS/index.css" />
<link href="./Images/favicon.ico" rel="icon" type="image/x-icon" />
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
<!-- Latest compiled and minified CSS -->

<script type="text/javascript" src="./javascript/victutors.js"></script>
<script src="./lib/Javascript/jquery.min.js"></script>
<script type="text/javascript" src="./lib/Javascript/ajaxupload.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./javascript/victutors.functions.js"></script>
<script type="text/javascript" src="./javascript/victutors.list.js"></script>
<script type="text/javascript" src="./javascript/bootstrap-select.js"></script>
<script type="text/javascript" src="./lib/Javascript/jquery.roundabout.js"></script>

<!-- Google tracking -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81667903-1', 'auto');
  ga('send', 'pageview');
</script>



<style>
html, body, h1, h2, h3, h4, h5 {
	font-family: "Lato", sans-serif
}
</style>
</head>
<body>
	<nav id = "TopNavBar" class="w3-xlarge navbar-inverse navbar navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	<span><img style = "margin-top:7px;margin-right:6px" class = "w3-left" src = "./Images/victutors_Icon_White.png" alt = "victutors_Icon" width = "10%"></span>
      <a class="w3-xlarge navbar-brand" href="index.php"><font size = "6" color="white">victutors.com</font></a>
    </div>
    <ul class="w3-right nav navbar-nav ">
      <li><a class = "w3-hover-red" onclick="document.getElementById('aboutusModal').style.display='block'"><font color="white">
	  <i><b>成为家教&nbsp;&nbsp;<i class="fa fa-users" aria-hidden="true"></i></b></i></font></a></li> 
	  <li><a class = "w3-hover-red" onclick="document.getElementById('ContactUsModal').style.display='block'"><font color="white">
	  <i><b>联系我们&nbsp;&nbsp;<i class="fa fa-phone" aria-hidden="true"></i></b></i></font></a></li>
	  <li><a class = "w3-hover-red" onclick="document.getElementById('FeedbackModal').style.display='block'"><font color="white">
	  <i><b>问题反馈&nbsp;&nbsp;<i class="fa fa-comments-o" aria-hidden="true"></i></b></i></font></a></li>
      <li><a class = "w3-hover-red" onclick="document.getElementById('FAQModal').style.display='block'"><font color="white">
	  <i><b>疑难解答&nbsp;&nbsp;<i class="fa fa-question-circle" aria-hidden="true"></i></b></i></font></a></li>
    </ul>
  </div>
</nav>
	<!-- Contact staff button -->
	<div id = "serviceButton" class="w3-theme-border w3-animate-left"
		style="position: fixed; left:0px ;bottom:80px; z-index: 999">
			<!--<button onmouseover = "victutors.functions.ShowHideServerPanel(1)"-->
			<button onclick = "document.getElementById('ContactUsModal').style.display='block'"
				class="w3-center w3-border w3-hover-grey w3-light-grey w3-btn w3-large"><b>联<br>系<br>客<br>服</b>
			</button>
	</div>
    
	<div id="mainBody">
		<div id = "bgvideo">
		</div>
		<div class="w3-container wall" style="margin-left:-16px; margin-right:-16px">
			<div id = "searchToolPanel" class="w3-center">
				<h2 id = "bgtext" style="padding-top: 25px" class = "w3-xxxlarge"> 维多利亚家教网
				<span><img src = "./Images/victutors_Icon_White.png" alt = "victutors_Icon" width = "10%"></span>
				</h2>
				<!--<button class="bgbutton w3-hover-red w3-teal w3-btn"><b class = "w3-large">查找家教</b></button>-->
				<div style = "margin-top:30px">
				    <select id = "Fselecter" class="selectpicker show-tick show-menu-arrow" data-width="400px" title="选择专业"
				    data-live-search="true" ></select>
				    <button class="w3-teal w3-xlarge w3-btn w3-hover-red" style = "margin-left:20px"
				    onclick = "victutors.functions.GetTutorByFaculty()">搜索家教&nbsp;
				    <i class="fa fa-search" aria-hidden="true"></i>
				    </button>
				</div>
			</div>
		</div>
    </div>
	
	<!-- Footer -->
	<footer id="footerpanel" class="w3-container w3-bottom w3-padding-10">
		<!--<h4 id = "CurrentTime"></h4>-->
		<p class = "w3-center">
			<span class = "w3-left w3-text-white">© Victutors.com - VICTUTORS ALL RIGHTS RESERVED</span>
			<span class = "w3-right"><a href="http://www.simplehitcounter.com" target="_blank"><img src="http://simplehitcounter.com/hit.php?uid=2164152&f=16777215&b=0" style="
    margin-bottom: 0px;
    padding-bottom: 2px;
" border="0" height="18" width="83" alt="web counter"></a><br><a href="http://www.simplehitcounter.com" target="_blank" style="text-decoration:none;"></a>
			</span>
			<span style = "margin-right:30px" class = "w3-right"><b class = "w3-text-white"> ｜ </b><a href = "#" ><b class = "w3-text-white">广告服务</b></a></span>
			<span class = "w3-right"><a href = "#" ><b class = "w3-text-white">免责声明</b></a></span>
		</p>
	</footer>

	<!-- 1. Aboutus modal -->
	<div id="aboutusModal" class="w3-modal" style = "z-index:999">
		<div class="w3-modal-content w3-animate-top w3-card-8">
			<header class="w3-container w3-teal">
				<span
					onclick="document.getElementById('aboutusModal').style.display='none'"
					class="w3-closebtn">&times;</span>
				<h2 class="w3-center w3-lobster">成为家教</h2>
			</header>
			<div class="w3-container"
				style="postion: absolute; margin-top: <30px></30px>">
				<div>
				<div class = "w3-row-padding" style = "height:380px">
					<div class = "w3-half">
						<div class="w3-group w3-half">
							<label>姓名:</label> <input
								class="w3-round w3-input w3-border w3-hover-border-black"
								style="width: 80%;" type="text" name="name" id="uname"/>
						</div>
						<div class="w3-group w3-half">
							<label>电话:</label> <input
								class="w3-round w3-input w3-border w3-hover-border-black"
								style="width: 80%;" type="text" name="phone" id="uphone"/>
						</div>
						<div class="w3-group w3-half">
							<label>微信:</label> <input
								class="w3-round w3-input w3-border w3-hover-border-black"
								style="width: 80%;" type="text" name="wechat" id="uwechat" />
						</div>
						<div class="w3-group w3-half">
							<label>学科:</label> <input
								class="w3-round w3-input w3-border w3-hover-border-black"
								style="width: 80%;" type="text" name="subject" id="usubject"/>
						</div>
                        <div class="w3-group">
							<label>邮箱:</label> <input
								class="w3-round w3-input w3-border w3-hover-border-black"
								style="width: 90%;" type="text" name="email" id ="uemail"/>
						</div>
						<div class="w3-group">
							<label style = "display:block;float:left"for = "introduction">自我介绍(辅导科目,授课时间,授课价格等等):</label>
							<textarea class="w3-round w3-input w3-border w3-hover-border-black" style="vertical-align: top;width: 90%;" rows = "4" cols="70" name="introduction" ></textarea>
						</div>

					</div>
					<div class = "w3-half">
						
						<div class="w3-group">
								<img id = "ImgUpLoad" class = "w3-center" src="./Images/Imgupload.png" alt="WeChat"
								style="width: 200px;height:170px;margin-left: 50px;margin-bottom: 30px;">
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

				<div style = "margin-left:50%;margin-bottom:10px">
					<button type="submit" onclick = "victutors.functions.sendTutorInfo()" class="w3-large w3-teal w3-btn w3-padding-10">Submit</button>
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
								<span class="glyphicon glyphicon-envelope"></span> 邮箱：info@victutors.com
							</p>
							<p style="margin-bottom: 25px">
								<span class="glyphicon glyphicon-user"></span> 微信：wayne-zhangyuwei
							</p>
						</div>
						<div class="col-sm-3 slideanim" style="left: 200px">
							<img src="./Images/WeChat.png" alt="WeChat"
								style="width: 90%">
						</div>
					</div>
				</div>
				<footer class="w3-container w3-teal">
				<p class="w3-center w3-lobster ">www.victutors.com</p>
			</footer>
			</div>
		</div>
    <!--FAQ modal-->
    <div id="FAQModal" class="w3-modal" style = "z-index:998">
		<div class="w3-modal-content w3-animate-top w3-card-8">
			<header class="w3-container w3-teal">
				<span
					onclick="document.getElementById('FAQModal').style.display='none'"
					class="w3-closebtn">&times;</span>
				<h2 class="w3-center w3-lobster">常见问题解答</h2>
			</header>
			<div class="w3-container"
				style="postion: absolute; margin-top: <30px></30px>">
				<div class = "w3-row-padding" style = "height:500px">
					<div class = "w3-half">
                        <h3 class="w3-center">For Students</h3>
                        <div class = "w3-large" style = "margin-top:30px">
							<div style = "margin-bottom:20px">
                                <div class = "w3-text-teal">
                                    <span id = "sq21"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style = "background-color:white" onclick="victutors.functions.sAnswer('ta21')">如何使用Victutors</button>
                                </div>
                                <span id = "sa21" style="display:none">
                                <p style = "margin-top: 5px">我们提倡尽可能的简化搜索步骤，您只需要在搜索栏中选择专业并点击搜索。</p>
                                </span>
                            </div>
							<div style = "margin-bottom:20px">
                                <div class = "w3-text-teal">
                                    <span id = "sq22"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style = "background-color:white" onclick="victutors.functions.sAnswer('ta22')">我要如何联系家教</button>
                                </div>
                                <span id = "sa22" style="display:none">
                                <p style = "margin-top: 5px">在您选择好合适的家教后，您可以通过家教名片中的电话，微信，邮箱以及扫描微信二维码等上述方式联系家教。</p>
                                </span>
                            </div>
							<div style = "margin-bottom:20px">
                                <div class = "w3-text-teal">
                                    <span id = "sq23"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style = "background-color:white" onclick="victutors.functions.sAnswer('ta23')">Victutors上家教值得信赖吗</button>
                                </div>
                                <span id = "sa23" style="display:none">
                                <p style = "margin-top: 5px">Victutors上的家教都是通过验证审核的，他们提供最好的服务</p>
                                </span>
                            </div>
							<div style = "margin-bottom:20px">
                                <div class = "w3-text-teal">
                                    <span id = "sq24"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style = "background-color:white" onclick="victutors.functions.sAnswer('ta24')">我需要交任何的费用吗</button>
                                </div>
                                <span id = "sa24" style="display:none">
                                <p style = "margin-top: 5px">我们是完全免费的一个服务性平台，无论对于家教还是用户我们至始至终不会收取任何费用</p>
                                </span>
                            </div>
							<div style = "margin-bottom:20px">
                                <div class = "w3-text-teal">
                                    <span id = "sq25"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style = "background-color:white" onclick="victutors.functions.sAnswer('ta25')">搜索栏中没有我想找学科</button>
                                </div>
                                <span id = "sa25" style="display:none">
                                <p style = "margin-top: 5px">您可以通过<a style="cursor:pointer" onclick="document.getElementById('ContactUsModal').style.display='block'"><b class="w3-text-teal">联系我们</b></a>，我们来帮您寻找</p>
                                </span>
                            </div>
						</div>
					</div>
					<div class = "w3-half">
                        <h3 class="w3-center">For Tutors</h3>
                        <div class = "w3-large" style = "margin-top:30px">
                            <div style = "margin-bottom:20px">
                                <div class = "w3-text-teal">
                                    <span id = "tq1"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <button style = "background-color:white" onclick="victutors.functions.tAnswer('ta1')">我在这里发布信息收费吗</button>
                                </div>
                                <span id = "ta1" style="display:none">
                                <p style = "margin-top: 5px">我们为家教提供一个完全免费的平台。所以家教在这里发布信息至始至终都不用支付任何费用。</p>
                                </span>
                            </div>
                            <div style = "margin-bottom:20px">
                                <div class = "w3-text-teal">
                                <span id = "tq2"><i  class="fa fa-plus" aria-hidden="true"></i></span>
                                <button style = "background-color:white" onclick="victutors.functions.tAnswer('ta2')">在家教名单里家教的位置是如何排列的</button>
                                </div>
                                <span id = "ta2" style="display:none">
                                <p style = "margin-top: 5px">在列表里家教的排列顺序是完全随机的。每次登录或刷新界面家教的排列顺序都会改变。我们保证每一位家教都有公平的机会被学生联系。</p>
                                </span>
                            </div>
                            <div style = "margin-bottom:20px">
                                <div class = "w3-text-teal">
                                <span id = "tq3"><i  class="fa fa-plus" aria-hidden="true"></i></span>
                                <button style = "background-color:white" onclick="victutors.functions.tAnswer('ta3')">我想发布家教信息</button>
                                </div>
                                <span id = "ta3" style="display:none">
                                <p style = "margin-top: 5px">我们欢迎个人以及团队入驻Victutors.com。您只需要点击右上角的‘家教入驻’并填写相关资料，我们将在24小时内审核发布您的信息！</p>
                                </span>
                            </div>
							<div style = "margin-bottom:20px">
                                <div class = "w3-text-teal">
                                <span id = "tq4"><i  class="fa fa-plus" aria-hidden="true"></i></span>
                                <button style = "background-color:white" onclick="victutors.functions.tAnswer('ta4')">学生如何联系家教</button>
                                </div>
                                <span id = "ta4" style="display:none">
                                <p style = "margin-top: 5px">学生可以通过以下方式联系家教：电话，微信，邮箱。我们建议您填写尽可能多的信息方便学生联系。</p>
                                </span>
                            </div>
							<div style = "margin-bottom:20px">
                                <div class = "w3-text-teal">
                                <span id = "tq5"><i  class="fa fa-plus" aria-hidden="true"></i></span>
                                <button style = "background-color:white" onclick="victutors.functions.tAnswer('ta5')">如何保证信息隐私</button>
                                </div>
                                <span id = "ta5" style="display:none">
                                <p style = "margin-top: 5px">您输入的信息都是基于完全自愿的原则。我们不会向外发布提供任何您的信息。详情您参考<a href="#"><b class="w3-text-teal">免责声明</b></a></p>
                                </span>
                            </div>
							<div style = "margin-bottom:20px">
                                <div class = "w3-text-teal">
                                <span id = "tq6"><i  class="fa fa-plus" aria-hidden="true"></i></span>
                                <button style = "background-color:white" onclick="victutors.functions.tAnswer('ta6')">我的家教团队想集体入驻</button>
                                </div>
                                <span id = "ta6" style="display:none">
                                <p style = "margin-top: 5px">我们欢迎任何的家教团队。当然团队发布任何信息都是完全免费的。我们会依据您的团队打造一个独特的团队窗口。详情请<a style="cursor:pointer" onclick="document.getElementById('ContactUsModal').style.display='block'"><b class="w3-text-teal">联系我们</b></a></p>
                                </span>
                            </div>
                        </div>
					</div>
                </div>
			</div>
			<footer class="w3-container w3-teal">
				<p class="w3-center w3-lobster ">www.victutors.com</p>
			</footer>
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
					<button onclick = "victutors.functions.sendFeedBack()" type="submit" class="w3-large w3-teal w3-btn w3-padding-10">Submit</button>
				</div>
				</div>
			</div>
			<footer class="w3-container w3-teal">
				<p class="w3-center w3-lobster ">www.victutors.com</p>
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

		<div id="feedbackAlert" class="w3-modal">
			<div class="w3-modal-content w3-animate-top w3-card-8" style = "width:30%">
				<header class="w3-container w3-red">
				<span onclick="document.getElementById('feedbackAlert').style.display='none'"
				class="w3-closebtn">&times;</span>
				<h2 class = "w3-red">谢谢您的反馈😊<br/>感谢您长期以来的支持！</h2>
				</header>
			</div>
		</div>

        <div id="newTutorAlert" class="w3-modal">
			<div class="w3-modal-content w3-animate-top w3-card-8" style = "width:30%">
				<header class="w3-container w3-red">
				<span onclick="document.getElementById('newTutorAlert').style.display='none'"
				class="w3-closebtn">&times;</span>
				<h2 class = "w3-red">谢谢您的加入😊<br/>您的支持是我们前进的动力！</h2>
				</header>
			</div>
		</div>
</body>
</html>